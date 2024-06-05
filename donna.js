function onResponse(response) {
    console.log(response);
    const res = response.json();
    console.log(res);
    return res;
}

//API unsplash

function onHomeJson(json) {
    const content_view = document.querySelector('#main');

    const container_results = document.createElement('section');
    container_results.classList.add('container_results'); //.container_results
    const results_view = document.createElement('section');//.results
    results_view.classList.add('results');
    content_view.appendChild(container_results);
    container_results.appendChild(results_view);

    for(let i = 0;  i < json.results.length; i++) {
        const item = json.results[i];
        const title = item.alt_description;
        const cover_url = item.urls.regular;

        const product = document.createElement('div');
        product.classList.add('product');//.product
        const img = document.createElement('div');
        img.classList.add('back_img');//.back_img
        img.style.backgroundImage = "url(" + cover_url + ")";
        const brand = document.createElement('h4');
        product.appendChild(img);
        results_view.appendChild(product);

    } 
}

q = "fashion women";
fetch("home_categoria.php?q=" + encodeURIComponent(q) + "&page=" + page).then(onResponse).then(onHomeJson);

let page = 0;

const search_form = document.querySelector('#navigazione form');
search_form.addEventListener("submit", search);

/*function onJson(json) {
    console.log('json ricevuto');
    console.log('contenuto della ricerca: ' + document.querySelector('#navigazione form input').value);

    //contenuto della ricerca - SEZIONE info_ricerca
    const ricerca = document.createElement('h6');
    ricerca.textContent = '‘' + document.querySelector('#navigazione form input').value + '’';

    //rimuovo la main section
    sfondoAttuale.classList.add('hidden');
    mainSectionAttuale.classList.add('hidden');

    //inserisco border-bottom
    const header = document.querySelector('#back_header');
    header.classList.add('back_header_search');

    //mostro la content view
    const back = document.querySelector('#back_content_view');
    back.classList.remove('hidden');
    back.classList.add('height_content_view'); 
    const content_view = document.querySelector('#content_view');
    content_view.classList.remove('hidden');
    content_view.classList.add('height_content_view');

    console.log('0-content_view - HEIGHT: ' + content_view.offsetHeight);
    content_view.innerHTML = '';

    console.log('1-back_content_view - HEIGHT: ' + back.offsetHeight);
    console.log('1-content_view - HEIGHT: ' + content_view.offsetHeight);


    //creo gli elementi della prima parte della content_view - SEZIONE info_ricerca
    const info_ricerca = document.createElement('section');
    info_ricerca.classList.add('info_ricerca');
    content_view.appendChild(info_ricerca);

    //contenuto della ricerca - SEZIONE info_ricerca (2)
    info_ricerca.appendChild(ricerca);

    //categorie - SEZIONE info_ricerca
    const categorie = document.createElement('div');
    let categorie_op = [];
    for(let i = 0; i < 3; i++) {
        categorie_op[i] = document.createElement('a');
    }
    const donna = document.createElement('span');
    donna.textContent = "Donna"; donna.classList.add('opzioni');
    const uomo = document.createElement('span');
    uomo.textContent = "Uomo"; uomo.classList.add('opzioni');
    const bambini = document.createElement('span');
    bambini.textContent = "Bambini"; bambini.classList.add('opzioni');

    categorie_op[0].appendChild(donna);
    categorie_op[1].appendChild(uomo);
    categorie_op[2].appendChild(bambini);

    for(i = 0; i < 3; i++) {
        categorie.appendChild(categorie_op[i]);
    }

    info_ricerca.appendChild(categorie);

    //SEZIONE - results_view
    const container_results = document.createElement('section');
    container_results.classList.add('container_results');
    const results_view = document.createElement('section');
    results_view.classList.add('results');
    content_view.appendChild(container_results);
    container_results.appendChild(results_view);

    for(let i = 0;  i < json.results.length; i++) {
        const item = json.results[i];
        const title = item.alt_description;
        const cover_url = item.urls.regular;

        const product = document.createElement('div');
        product.classList.add('product');
        const img = document.createElement('div');
        img.classList.add('back_img');
        img.style.backgroundImage = "url(" + cover_url + ")";
        const brand = document.createElement('h4');
        brand.classList.add('brand');
        if(item.user.last_name == null) brand.textContent = "NULL";
        else brand.textContent = item.user.last_name;
        const caption = document.createElement('span');
        caption.classList.add('caption');
        caption.textContent = item.user.username + " - " + title;
        console.log('caption: ' + caption.textContent);
        const prezzo = document.createElement('span');
        prezzo.classList.add('caption');
        prezzo.textContent = (Math.random() * (70 - 20) + 20).toFixed(2) + ' €';
        product.appendChild(img);
        product.appendChild(brand);
        product.appendChild(caption);
        product.appendChild(prezzo);
        results_view.appendChild(product);

    }

    const barra_nav = document.createElement('div');
    barra_nav.classList.add('barra_nav');
    container_results.appendChild(barra_nav);

    const a_b = document.createElement('span');
    a_b.classList.add('material-symbols-outlined');
    a_b.textContent = "arrow_back_ios";
    const pagina = document.createElement('span');
    pagina.textContent = "Pagina " + page + " di " + json.total_pages;
    const a_f = document.createElement('span');
    a_f.classList.add('material-symbols-outlined');
    a_f.textContent = "arrow_forward_ios";

    barra_nav.appendChild(a_b);
    barra_nav.appendChild(pagina);
    barra_nav.appendChild(a_f);

    if(page > 1)
        a_b.addEventListener('click', paginaPrecedente);
    if(page < json.total_pages)
    a_f.addEventListener('click', paginaSuccessiva);

    console.log('back_content_view - HEIGHT: ' + back.offsetHeight);
    console.log('content_view - HEIGHT: ' + content_view.offsetHeight);

}*/

function paginaPrecedente(event) {
    page--;
    const form_data = new FormData(document.querySelector('#navigazione form'));
    fetch("search.php?q=" + encodeURIComponent(form_data.get('search')) + "&page=" + page).then(onResponse).then(onJson);
}

function paginaSuccessiva(event) {
    page++;
    const form_data = new FormData(document.querySelector('#navigazione form'));
    fetch("search.php?q=" + encodeURIComponent(form_data.get('search')) + "&page=" + page).then(onResponse).then(onJson);
}

function search(event) {
    event.preventDefault();
    const form_data = new FormData(document.querySelector('#navigazione form'));
    fetch("search.php?q=" + encodeURIComponent(form_data.get('search')) + "&page=" + page).then(onResponse).then(onJson);
}

