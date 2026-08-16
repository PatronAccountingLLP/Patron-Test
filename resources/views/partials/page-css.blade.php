{{--
  Shared stylesheet for the SEO pages. Pass the file: @include('partials.page-css', ['file' => 'css/site.css'])

  The ?v= is the file's own content hash, so editing the stylesheet busts the cache by itself.
  That matters: nginx serves /css/ with max-age=31536000 (1 year), so a hand-written version
  string would strand every visitor on a stale stylesheet until someone remembered to bump it
  across ~1,000 pages — which is exactly the duplication this partial exists to remove.
--}}
@php($__css = $file ?? 'css/site.css')
@php($__path = base_path($__css))
<link rel="stylesheet" href="{{ asset($__css) }}?v={{ file_exists($__path) ? substr(md5_file($__path), 0, 8) : '1' }}">
