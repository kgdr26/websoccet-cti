document.addEventListener('DOMContentLoaded', function () {
    const dataList = document.getElementById('data-list');

    window.Echo.channel('random-data')
        .listen('RandomDataGenerated', (e) => {
            dataList.innerHTML = '';
            e.data.forEach((item, index) => {
                const listItem = document.createElement('li');
                listItem.textContent = `${index + 1}. ${item}`;
                dataList.appendChild(listItem);
            });
        });
});
