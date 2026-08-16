<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HSNCodeData extends Model
{
    use HasFactory;
    protected $table = 'hsn_code_data';
    protected $guarded = [];

    /** Google truncates result titles past roughly this many characters. */
    private const TITLE_LIMIT = 60;

    /**
     * The meta_title column stores a ready-made <title> tag. Its text is
     * "HSN Code: {code} {description} | GST Rates", which for ~895 codes runs
     * 71-97 characters, so Google cuts it off mid-word in search results.
     *
     * Returns the same tag with an over-long title rebuilt to fit. Titles that
     * already fit come back untouched — this only changes what was flagged.
     */
    public function shortMetaTitle(): string
    {
        return preg_replace_callback(
            '~<title>(.*?)</title>~is',
            fn ($m) => '<title>' . self::shortenTitle($m[1]) . '</title>',
            (string) $this->meta_title,
            1
        );
    }

    /**
     * "HSN Code: 38221990 Miscellaneous Chemical Products~Diagnostic Or Laboratory | GST Rates"
     *   -> "HSN 38221990: Diagnostic Or Laboratory | GST Rate"
     *
     * The source descriptions carry two artifacts worth dropping while we are here:
     * a "~" joining the chapter heading to the specific item (the specific half is
     * the useful one), and a dangling comma where the source list was cut short.
     */
    public static function shortenTitle(string $title, int $limit = self::TITLE_LIMIT): string
    {
        $title = trim($title);
        // A title is left completely alone unless it is too long, or the source
        // description left a bracket open ("Carp (Cyprinus Spp., Carassius") — 423
        // codes are short enough but still read as broken in a result snippet.
        $bracketLeftOpen = substr_count($title, '(') > substr_count($title, ')');
        if (mb_strlen($title) <= $limit && ! $bracketLeftOpen) {
            return $title;
        }
        // Only the known generated format is rewritten; anything else is left alone
        // rather than mangled by a guess at its structure.
        if (! preg_match('~^HSN Code:\s*(\S+)\s+(.*?)\s*\|\s*GST Rates?$~u', $title, $m)) {
            return $title;
        }

        [$code, $desc] = [$m[1], $m[2]];
        if (str_contains($desc, '~')) {
            $desc = substr($desc, strrpos($desc, '~') + 1);
        }
        $desc = trim($desc, " \t,;:-");

        $prefix = "HSN {$code}: ";
        $suffix = ' | GST Rate';
        $budget = $limit - mb_strlen($prefix) - mb_strlen($suffix);

        if ($budget < 1) {                       // absurdly long code: drop the description
            return "HSN {$code}{$suffix}";
        }
        if (mb_strlen($desc) > $budget) {
            $cut = mb_substr($desc, 0, $budget);
            // Cut on a word boundary. That also keeps us from slicing an HTML entity
            // in half, since entities contain no spaces.
            if (($space = mb_strrpos($cut, ' ')) !== false) {
                $cut = mb_substr($cut, 0, $space);
            }
            $desc = $cut;
        }

        // Drop a bracket left hanging open — either by the cut above ("Emus(Dromaius")
        // or, for ~237 codes, already unclosed in the source data ("Hake (Merluccius Spp.,").
        if (substr_count($desc, '(') > substr_count($desc, ')')) {
            $desc = mb_substr($desc, 0, mb_strrpos($desc, '('));
        }
        $desc = trim($desc, " \t,;:-");

        return $desc === '' ? "HSN {$code}{$suffix}" : $prefix . $desc . $suffix;
    }
}
