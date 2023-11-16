function filterItems(category){
  var items = document.querySelectorAll('.project-box');

  items.forEach(function(item){
    item.style.display = 'none';
    if(category === 'all' || item.classList.contains(category)) {
      item.style.display = 'inline-block';
    }
  });
}