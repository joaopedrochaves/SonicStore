function filterItems(category) {
  var items = document.querySelectorAll('.item');

  items.forEach(function(item) {
    item.style.display = 'none';

    if (category === 'all' || item.classList.contains(category)) {
      item.style.display = 'inline-block';
    }
  });
}

// Adiciona alguns itens de exemplo
var itemContainer = document.getElementById('itemContainer');

var gamerItem = document.createElement('div');
gamerItem.className = 'item gamer';
gamerItem.innerHTML = '<img src="gamer1.jpg" alt="Gamer 1"><p>Gamer 1</p>';

var mangaItem = document.createElement('div');
mangaItem.className = 'item manga';
mangaItem.innerHTML = '<img src="manga1.jpg" alt="Manga 1"><p>Manga 1</p>';

itemContainer.appendChild(gamerItem);
itemContainer.appendChild(mangaItem);
