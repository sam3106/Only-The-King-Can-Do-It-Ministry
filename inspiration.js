var backgrounds = [ "https://i.pinimg.com/originals/de/75/59/de7559fc07b99c2fbe725568501b3e18.gif", "http://s.newsweek.com/sites/www.newsweek.com/files/styles/embed-lg/public/2014/12/22/1226bible04.jpg", "https://media.giphy.com/media/xfuWEmE8AkO6A/giphy.gif", "https://www.touristisrael.com/wp-content/uploads/thumbJerusalemOld.jpg", "http://38.media.tumblr.com/e4131c661b9f4c13c3ee5b39b528ccd4/tumblr_nmli0vlBty1sdqemdo1_1280.gif"];

var title =["Matthew 22:37","Romans 1:16","2 Corinthians 13:14","Acts 1:8","Numbers 23:19","1 Corinthians 1:20","Romans 8:28","Psalm 46:10","John 3:16 ","Proverbs 18:10","Proverbs 4:7 ","Isaiah 41:10"];

var bibleVerse = ["Jesus said to him,'You shall love the LORD your God with all your heart, with all your soul, and with all your mind'","For I am not ashamed of the gospel of Christ,for it is the power of God to salvation for everyone who believes, for the Jew first and also for the Greek","The grace of the Lord Jesus Christ, and the love of God, and the communion of the Holy Spirit be with you all.Amen.","But you shall receive power when the Holy Spirit has come upon you; and you shall be witnesses to Me in Jerusalem, and in all Judea and Samaria, and to the end of the earth.","God is not a man,that He should lie, Nor a son of man, that He should repent.Has He said, and will He not do? Or has He spoken, and will He not make it good."," For all the promises of God in him are yea, and in him Amen, unto the glory of God by us.","And we know that all things work together for good to those who love God, to those who are the called according to His purpose. uttered."," Be still, and know that I am God;  I will be exalted among the nations, I will be exalted in the earth!"," For God so loved the world that He gave His only begotten Son, that whoever believes in Him should not perish but have everlasting life","The name of the LORD is a strong tower; The righteous run to it and are safe.","Wisdom is the principal thing; Therefore get wisdom. And in all your getting, get understanding.","Fear not, for I am with you; Be not dismayed, for I am your God. I will strengthen you,Yes, I will help you, I will uphold you with My righteous right hand"
];
$(document).ready(function(){
var current = 0;
var currentVerse = 0;
var currentTitle=0;
function nextBackground(){
$("#all").css({"backgroundImage" :"url(" + backgrounds[current = ++current % backgrounds.length] + ")","backgroundSize" :'100% 100%'});
 setTimeout(nextBackground, 8000);
}
setTimeout(nextBackground, 8000);
$("#all").css({"backgroundImage" :"url(" + backgrounds[0] + ")","backgroundSize" :'100% 100%'});
 
function nextVerse(){
$("#verses").text(bibleVerse[currentVerse = ++currentVerse % bibleVerse.length]);
 setTimeout(nextVerse, 8000);
}
setTimeout(nextVerse, 8000);
$("#verses").text(bibleVerse[0]);
    
function titleVerse(){
$("#title").text(title[currentTitle = ++currentTitle % title.length]);
 setTimeout(titleVerse, 8000);
}
setTimeout(titleVerse, 8000);
$("#title").text(title[0]);
});
/*
var backgroundDisplayed = document.getElementById("all");
backgroundDisplayed.style.backgroundImage = "url(" + backgrounds[1] + ")";
backgroundDisplayed.style.backgroundSize = "100% 100%";

function imgLoop(){
while(i<backgrounds.length){
    i++;
}
    backgroundDisplayed.style.background[i];
}
*/