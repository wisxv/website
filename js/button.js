var count = 0; // создаем переменную для отслеживания нажатий на кнопку

document.getElementById("myButton").onclick = function () {
    count++; // увеличиваем значение count при каждом нажатии
    if (count % 2 == 0) { // проверяем, является ли число четным
        document.getElementById("demo").innerHTML = ""; // если число четное, скрываем картинку
    } 
    else {
        var img = document.createElement("img"); // создаем новый элемент img
        img.src = "https://img.freepik.com/free-photo/adorable-looking-kitten-with-yarn_23-2150886292.jpg"; // добавляем ссылку на нужную картинку
        document.getElementById("demo").appendChild(img); // добавляем созданный элемент в блок с id "demo"
    }
}