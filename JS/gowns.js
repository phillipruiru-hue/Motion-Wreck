/* ============================================
   Gowns page: filtering + custom dropdowns
   ============================================ */

const state = { category: 'all', gender: 'all' };

const cards = document.querySelectorAll('.gowns-cards article');
const noResults = document.getElementById('no-results');
const dropdowns = document.querySelectorAll('.dropdown');

/* ---------- 1. show or hide the cards ---------- */

function applyFilters() {
    let shown = 0;

    cards.forEach(card => {
        const categoryOk = state.category === 'all' || card.dataset.category === state.category;
        const genderOk = state.gender === 'all' || card.dataset.gender === state.gender;
        const visible = categoryOk && genderOk;

        card.hidden = !visible;
        if (visible) shown++;
    });

    noResults.hidden = shown !== 0;
}

/* ---------- 2. change one filter and keep desktop + mobile in sync ---------- */

function setFilter(type, value) {
    state[type] = value;

    // desktop chips
    document.querySelectorAll(`.gowns-t button[data-type="${type}"], .size-t button[data-type="${type}"]`)
        .forEach(btn => {
            const isActive = btn.dataset.value === value;
            btn.classList.toggle('active', isActive);
            btn.setAttribute('aria-pressed', String(isActive));
        });

    // mobile dropdown of the same type
    const dropdown = document.querySelector(`.dropdown[data-type="${type}"]`);
    dropdown.querySelectorAll('li').forEach(li => {
        const isSelected = li.dataset.value === value;
        li.setAttribute('aria-selected', String(isSelected));
        if (isSelected) {
            dropdown.querySelector('.dropdown-label').textContent = li.textContent;
        }
    });

    applyFilters();
}

/* ---------- 3. desktop chips ---------- */

document.querySelectorAll('.gowns-t button, .size-t button').forEach(btn => {
    btn.addEventListener('click', () => setFilter(btn.dataset.type, btn.dataset.value));
});

/* ---------- 4. mobile dropdowns ---------- */

function closeAll() {
    dropdowns.forEach(dd => {
        dd.querySelector('.dropdown-list').hidden = true;
        dd.querySelector('.dropdown-btn').setAttribute('aria-expanded', 'false');
    });
}

dropdowns.forEach(dd => {
    const btn = dd.querySelector('.dropdown-btn');
    const list = dd.querySelector('.dropdown-list');

    btn.addEventListener('click', () => {
        const wasClosed = list.hidden;
        closeAll();                              // only one open at a time
        list.hidden = !wasClosed;
        btn.setAttribute('aria-expanded', String(wasClosed));
    });

    list.addEventListener('click', e => {
        const option = e.target.closest('li');
        if (!option) return;

        setFilter(dd.dataset.type, option.dataset.value);
        closeAll();
    });
});

document.addEventListener('click', e => {
    if (!e.target.closest('.dropdown')) closeAll();   // tap outside closes
});

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeAll();
});