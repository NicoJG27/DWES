// Configuración se carga de manifest.json
const $ = (s)=>document.querySelector(s);
const unitsEl = $('#units');
const search = $('#search');

let data = { alumno:'Alumno/a', asignatura:'Asignatura', curso:'2024/25', ejercicios:[] };
let q = '';

function render(){
  $('#studentName').textContent = data.alumno;
  $('#metaLine').textContent = `${data.asignatura} · ${data.curso}`;

  // Agrupar por unidad
  const groups = {};
  data.ejercicios.forEach(e => {
    const hayQ = !q || (e.titulo+e.descripcion+(e.tags||[]).join(' ')).toLowerCase().includes(q);
    if(!hayQ) return;
    (groups[e.unidad] ||= []).push(e);
  });

  unitsEl.innerHTML = '';
  Object.keys(groups).sort().forEach(unidad => {
    const lista = groups[unidad];
    const wrap = document.createElement('section');
    wrap.className = 'unit';
    wrap.innerHTML = `
      <div class="unit-head">
        <div class="unit-title">
          <span class="pill">Unidad</span>
          <h2>${unidad}</h2>
        </div>
        <div class="pill count">${lista.length} ejercicio(s)</div>
      </div>
      <div class="unit-body"></div>
    `;
    const body = wrap.querySelector('.unit-body');
    lista.forEach(ej => {
      const card = document.createElement('article');
      card.className = 'card';
      card.innerHTML = `
        <h3>${ej.titulo}</h3>
        <p>${ej.descripcion||''}</p>
        <div class="tags">${(ej.tags||[]).map(t=>`<span class="tag">${t}</span>`).join('')}</div>
        <div class="actions">
          <a class="btn" target="_blank" rel="noopener" href="${ej.url}">Abrir</a>
          ${ej.codigo ? `<a class="ghost" target="_blank" rel="noopener" href="${ej.codigo}">Código</a>` : ''}
        </div>
      `;
      body.appendChild(card);
    });
    unitsEl.appendChild(wrap);
  });

  if(!Object.keys(groups).length){
    unitsEl.innerHTML = '<p class="muted">No hay ejercicios que coincidan con la búsqueda.</p>';
  }
}

search.addEventListener('input', (e)=>{ q = e.target.value.trim().toLowerCase(); render(); });

fetch('manifest.json')
  .then(r=>r.json())
  .then(j=>{ data = j; render(); })
  .catch(()=>{
    // Fallback si no hay manifest.json
    render();
  });
