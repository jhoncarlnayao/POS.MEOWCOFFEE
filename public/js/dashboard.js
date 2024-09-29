
document.getElementById('view-cart1').onclick = function() {
    var viewCartDisplay = document.getElementById('viewcart-display');
    var viewCartContainer = document.getElementById('viewcart-container');


    if (viewCartDisplay.style.display === 'none' || viewCartDisplay.style.display === '') {
        viewCartDisplay.style.display = 'flex'; 
        viewCartContainer.style.display = 'block';
    } else {
        viewCartDisplay.style.display = 'none';
    }
};


function addToCart(item_name, description, price) {
    fetch('/add-to-cart', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: JSON.stringify({
            item_name: item_name,
            description: description,
            price: price
        }),
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
    });
}


document.addEventListener('DOMContentLoaded', function () {
  let currentSet = 1;
  const cardSets = [
    document.getElementById('recommendedCoffee-container'),
    document.getElementById('recommendedCoffee-container2'),
  ];

 
  function showCurrentSet() {
    cardSets.forEach((set, index) => {
      if (index === currentSet - 1) {
        set.style.display = 'block';
        set.classList.add('fade-in');
      } else {
        set.style.display = 'none';
        set.classList.remove('fade-in');
      }
    });
  }

  
  function switchCards() {
    cardSets[currentSet - 1].classList.remove('fade-in');
    cardSets[currentSet - 1].classList.add('fade-out');

    setTimeout(() => {
      cardSets[currentSet - 1].style.display = 'none';
      cardSets[currentSet - 1].classList.remove('fade-out');
      currentSet = currentSet === 1 ? 2 : 1;
      showCurrentSet();
    }, 1000); 
  }


  showCurrentSet();


  setInterval(switchCards, 10000); 
});
