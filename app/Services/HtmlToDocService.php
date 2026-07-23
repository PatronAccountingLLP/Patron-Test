<?php

namespace App\Services;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Html;
use PhpOffice\PhpWord\IOFactory;

class HtmlToDocService
{
    public function convert(string $html, string $fileName = 'document.docx')
    {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        Html::addHtml($section, $html, false, false);

        $filePath = storage_path("app/public/{$fileName}");

        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($filePath);

        return $filePath;
    }
}
