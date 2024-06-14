function updateImage(){
    fetch('order.php')
    .then(response => response.text())
    .then(img => {
        document.getElementById('dynamic-image').src = img;
    })
   .catch(error => console.error('Error fetching image:', error));
}
updateImage();
setInterval(updateImage, 5000);
    var buyButtons = document.querySelectorAll('.buy-button');
    buyButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            window.location.href = 'order.html';
        });
    });
function handleFormSubmit(event) {
    event.preventDefault();
    alert("Продаж мотоцикла успішно здійснено!");
    return false; 
}
 fetch('get_motorcycle_data.php')
            .then(response => response.json())
            .then(data => {
                // Вставка опису у відповідний елемент на сторінці
                document.getElementById('description').textContent = data.description;
                // Вставка характеристик у відповідний елемент на сторінці
                document.getElementById('specs').textContent = data.specs;
            })
            .catch(error => console.error('Помилка:', error));