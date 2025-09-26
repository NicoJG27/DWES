<?php
// ======= CONFIG =======
$alumno     = "Nicolás Jiménez Gutiérrez";
$asignatura = "Desarrollo Web en Entorno Servidor";
$curso      = "2025/26";
$github     = "https://github.com/NicoJG27/DAWESE.git"; 

// Patrones: carpetas unidadX / actY
$patronUnidad = '/^unidad(\d+)$/i';
$patronAct    = '/^act(\d+)$/i';

// Ignorar
$ignorarArchivos = ['index.php', '_helpers.php'];

// ======= HELPERS =======
function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

function leerMeta($ruta){
  $meta = ['title'=>null,'desc'=>null,'tags'=>[],'code'=>null];
  $base = basename($ruta, '.php');
  if (strpos($base, '--') !== false){
    [, $titulo] = explode('--', $base, 2);
    $meta['title'] = trim(str_replace(['_','-'], [' ',' '], $titulo));
  }
  $fh = @fopen($ruta, 'r');
  if(!$fh) return $meta;
  $buf = '';
  for($i=0; $i<60 && !feof($fh); $i++){ $buf .= fgets($fh); }
  fclose($fh);

  if(preg_match('/\/\*\s*---(.*?)---\s*\*\//s', $buf, $m)){
    $yaml = trim($m[1]);
    foreach(preg_split('/\R+/', $yaml) as $line){
      if(!trim($line)) continue;
      if(preg_match('/^\s*([a-zA-Z]+)\s*:\s*(.+)\s*$/', $line, $mm)){
        $k = strtolower(trim($mm[1]));
        $v = trim($mm[2]);
        if($k === 'tags'){
          if(preg_match('/^\[(.*)\]$/', $v, $t)){ $v = $t[1]; }
          $meta['tags'] = array_values(array_filter(array_map('trim', preg_split('/[,;]+/', $v))));
        } elseif($k === 'title'){ $meta['title'] = $v; }
          elseif($k === 'desc'){ $meta['desc'] = $v; }
          elseif($k === 'code'){ $meta['code'] = $v; }
      }
    }
  }

  if(preg_match_all('/^\s*\/\/\s*([a-zA-Z]+)\s*:\s*(.+)\s*$/m', $buf, $mm, PREG_SET_ORDER)){
    foreach($mm as $m2){
      $k = strtolower(trim($m2[1]));
      $v = trim($m2[2]);
      if($k === 'tags'){
        $meta['tags'] = array_values(array_filter(array_map('trim', preg_split('/[,;]+/', $v))));
      } elseif($k === 'title'){ $meta['title'] = $v; }
        elseif($k === 'desc'){ $meta['desc'] = $v; }
        elseif($k === 'code'){ $meta['code'] = $v; }
    }
  }

  return $meta;
}

function recogerMapa($patronUnidad, $patronAct, $ignorarArchivos){
  $mapa = [];
  foreach (scandir('.') as $u) {
    if ($u[0]==='.' || !is_dir($u)) continue;
    if (!preg_match($patronUnidad, $u, $mu)) continue;
    $numU = (int)$mu[1];

    foreach (glob("$u/*", GLOB_ONLYDIR) ?: [] as $aDir) {
      $a = basename($aDir);
      if (!preg_match($patronAct, $a, $ma)) continue;
      $numA = (int)$ma[1];

      // Listar solo archivos actN_N.php
      $files = array_filter(glob("$aDir/*.php") ?: [], function ($f) {
        return preg_match('/^act\\d+_\\d+\\.php$/i', basename($f));
      });

      foreach ($files as $f) {
        $base = basename($f);
        if (in_array(strtolower($base), array_map('strtolower',$ignorarArchivos), true)) continue;

        $m = leerMeta($f);
        $titulo = $m['title'] ?: preg_replace('/[_-]+/',' ', pathinfo($base, PATHINFO_FILENAME));
        $desc   = $m['desc']  ?: '';
        $tags   = $m['tags']  ?: [];
        $code   = $m['code']  ?: '';

        $mapa[$numU][$numA][] = [
          'file'   => $f,
          'titulo' => $titulo,
          'desc'   => $desc,
          'tags'   => $tags,
          'code'   => $code,
        ];
      }
      if (!empty($mapa[$numU][$numA])) {
        usort($mapa[$numU][$numA], fn($x,$y)=>strnatcasecmp($x['file'],$y['file']));
      }
    }
  }
  ksort($mapa, SORT_NUMERIC);
  foreach ($mapa as $uNum => $_acts) {
    ksort($mapa[$uNum], SORT_NUMERIC);
  }
  return $mapa;
}

$mapa = recogerMapa($patronUnidad, $patronAct, $ignorarArchivos);
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portafolio · <?=h($alumno)?></title>
  <link rel="stylesheet" href="assets/style.css?v=5">
</head>
<body>
<header class="header">
  <div class="brand">
    <img src="assets/banner.png" alt="Banner" class="banner">
    <div class="title">
      <h1 id="studentName"><?=h($alumno)?></h1>
      <p id="metaLine" class="muted">
        <?=h($asignatura)?> · <?=h($curso)?>
      </p>
      <p>
        <a class="btn" target="_blank" href="<?=h($github)?>">Ver código en GitHub</a>
      </p>
    </div>
  </div>
  <input id="q" type="search" placeholder="Buscar ejercicio…">
</header>

<main class="container" id="root">
  <?php if(!$mapa): ?>
    <p class="empty">No se han encontrado ejercicios.
      Crea carpetas <code>unidad1/act1/</code> y sube tus <code>actN_N.php</code>.
    </p>
  <?php else: ?>
    <?php foreach($mapa as $uNum => $acts): ?>
      <section class="unit">
        <h1>&nbsp;📚 Unidad <?=h($uNum)?></h1>
        <?php foreach($acts as $aNum => $ejercicios): ?>
          <div class="unit-head">
            <div class="unit-title">
              <span class="pill">💡 Actividad</span>
              <h3 style="margin:0">Act <?=h($aNum)?></h3>
            </div>
            <div class="pill count"><?=count($ejercicios)?> ejercicio(s)</div>
          </div>
          <div class="grid">
            <?php foreach($ejercicios as $ej): ?>
              <article class="card" data-tags="<?=h(implode(' ', $ej['tags']))?>">
                <h3>📝 <?=h($ej['titulo'])?></h3>
                <p><?=h($ej['desc'])?></p>
                <?php if($ej['tags']): ?>
                  <div class="tags">
                    🏷️<?php foreach($ej['tags'] as $t): ?><span class="tag"><?=h($t)?></span><?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <div class="actions">
                  <a class="btn" target="_blank" rel="noopener" href="<?=h($ej['file'])?>">Abrir </a>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </section>
    <?php endforeach; ?>
  <?php endif; ?>
</main>

<script>
const q = document.getElementById('q');
q.addEventListener('input', () => {
  const term = q.value.trim().toLowerCase();
  document.querySelectorAll('.card').forEach(card => {
    const text = card.innerText.toLowerCase();
    card.style.display = text.includes(term) ? '' : 'none';
  });
});
</script>
</body>
</html>
