// on scroll function in about.php function to check when an id is on focus and when so, we want to change the active in the table of content
// about.php javascript code
const aboutImg = document.querySelector('.about-img');

if(window.location.pathname == "/pages/about.php"){
    const historySection = document.querySelector('#history')
    const missionStatement = document.querySelector('#about-mission')
    const tableContent = document.querySelector(".table-of-content")
    const aboutListItem = document.querySelectorAll(".list-group li")
    const pageContent = document.querySelectorAll(".page-content>div")
    // function that returns rect property of a particular element
    const getElementRect = function(e){
       let rect = e.getBoundingClientRect()
       return rect;
    }


    // for image
    aboutImg.style.background= "linear-gradient(0deg,#0073ffbe,#00234da8),url('../assets/img/17.jpg')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.minHeight = `${400}px`
    //  for priority areas
    const prioritytabs = document.querySelectorAll("#priority-tabs>button");
    const priorityfield = document.querySelectorAll("#priority-field>div");
    for (const x of prioritytabs) {
        x.onclick =()=>{
            // first remove active from all of the priority field
            for (const y of priorityfield) {
                // set the corresponding y data to class active
                if (y.id == `priority-${x.dataset.priority}`){
                    y.classList.toggle('hidden')
                }else{
                }
            }

        }
    }

}
if(window.location.pathname == "/pages/gallery.php"){
    const imglikebtn = document.querySelectorAll(".imglike")
    for (const x of imglikebtn) {
        x.onclick= ()=>{
            if(x.getAttribute('name')=="heart-outline"){
                // it means the heart has not been clicked before
                x.setAttribute('name', 'heart')
                x.style.color = "red"
            }else{
                // means it has been clicked
                x.setAttribute('name',"heart-outline")
                x.style.color = "white"
            }
            
        }
    }
}

// 
if(window.location.pathname == "/pages/blog.php" || window.location.pathname =="/pages/blog-posts.php"){
    var head = document.getElementsByTagName('HEAD')[0];
    console.log(head)
    // Create new link Element
    var link = document.createElement('link');

    // set the attributes for link element
    link.rel = 'stylesheet';
 
    link.type = 'text/css';
 
    link.href = '../css/templatemo-stand-blog.css';

    // Append link element to HTML head
    head.appendChild(link);
}

if(window.location.pathname == "/index.php"|| window.location.pathname== "/"){
    aboutImg.style.background = "white"
    aboutImg.style.backgroundSize = "cover"
    // text limit for the program card descriptions
    let programDesc = document.querySelectorAll('.programs-card-desc')
    for (const x of programDesc) {
        let newText = x.textContent.substring(0,211)
        x.textContent = newText +"..."
    }
}

if(window.location.pathname == "/pages/volunteer.php"){
    
    aboutImg.style.background= "linear-gradient(#00000090,#00000090),url('../assets/img/pexels-rodnae-productions-6646852.jpg')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.minHeight = `${400}px`
}
// priority areas
if(window.location.pathname == "/pages/event.php"){
    
    aboutImg.style.background= "linear-gradient(#00000090,#00000090),url('../assets/img/pexels-luis-quintero-2774556.jpg')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.minHeight = `${400}px`
    aboutImg.style.backgroundPosition="center"
}
// close btn function
let closeFunction = (btn, target)=>{
    let btnElement = document.querySelector(btn)
    let targetElement = document.querySelector(target)
    
        btnElement.onclick =()=>{
            if(targetElement.classList.contains("show")){
            targetElement.classList.remove('show')
           }else{
            targetElement.classList.add('show')
            }
        }
}
let hideFunction = (btn,target)=>{
    let btnElement = document.querySelector(btn)
    let targetElement = document.querySelector(target)
    
        btnElement.onclick =()=>{
            targetElement.classList.replace('show','hide')
        }
}
// for navbar scroll function
let navbar= document.querySelector('.navbar')
window.onscroll = (e)=>{
    if(window.pageYOffset >= 100){
        navbar.style.position = "fixed"
        navbar.style.top = 0
        navbar.style.width = `${100}%`
        navbar.style.zIndex = 2
        navbar.style.padding = `${50}px,${0} !important`
    }else{
        navbar.style.position = "relative"
        navbar.style.backgroundColor = 'var(--primaryColor)'
    }
    // console.log(window.pageYOffset)
}

// delay popup  and add to the screen
let popup = document.querySelector('.popup')
window.onload = ()=>{
    setTimeout(function(){
        popup.classList.replace('hide','show')
    },15000)
}