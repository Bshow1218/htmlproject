let instagram_URLS = [
    "https://www.instagram.com/p/CRvv6LjtOxt/",
    "https://www.instagram.com/p/CRq4FWhKaHr/",
    "https://www.instagram.com/p/CRoNCgwL6Gi/",
    "https://www.instagram.com/p/CRbf1L1Kt2P/",
    "https://www.instagram.com/p/CRbdeobK36B/",
    "https://www.instagram.com/p/CRtQiK0qEXe/"
];

let height = window.screen.height;
let width = window.screen.width;

let postHeight = height / 2;
let postWidth = width / 3;

for (let i = 0; i < instagram_URLS.length; i++) {
    let section = document.getElementById("insta-" + i);
    let GET_URL = "https://graph.facebook.com/v11.0/instagram_oembed?url=" + instagram_URLS[i] + "&access_token=";
    $.getJSON(GET_URL, function(data) { section.appendChild(data.html); });
}