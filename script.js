document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('gamertag-form');
    const postList = document.getElementById('post-list');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const gamertagInput = document.getElementById('gamertag');
        const gamertag = gamertagInput.value.trim();

        if (gamertag) {
            const listItem = document.createElement('li');
            listItem.textContent = gamertag;
            postList.appendChild(listItem);

            gamertagInput.value = '';
        }
    });
});
