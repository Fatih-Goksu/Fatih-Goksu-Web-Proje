var isTextShown = false;

function showSpecialText() {
    if (!isTextShown) {
        var targetElement = document.querySelector('h2');
        var textToDisplay = " Siz değerli müşterilerimize unutulmaz bir gastronomik deneyim yaşatmak amacıyla özel menümüzü sunuyoruz. Her biri özenle seçilmiş malzemelerle hazırlanan ve özgün tariflerle buluşturulan bu yemekler, damak zevkinize hitap edecek.";
        var delay = 30; // Her karakterin görünme süresi (milisaniye cinsinden)

        function displayTextWithDelay(index) {
            if (index < textToDisplay.length) {
                targetElement.innerHTML += textToDisplay.charAt(index);
                index++;
                setTimeout(function () {
                    displayTextWithDelay(index);
                }, delay);
            } else {
                isTextShown = true;
            }
        }

        displayTextWithDelay(0);
    }
}



function showAboutInfo() {
    var aboutInfo = "Restoranımız 20 yıldan fazla bir süredir müşterilerine en kaliteli yemekleri sunmaktadır. Misyonumuz, lezzetli ve sağlıklı yemekleri uygun fiyatlarla sunarak müşteri memnuniyetini sağlamaktır.";
    document.getElementById("about-info").innerText = aboutInfo;
}







