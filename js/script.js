// on scroll function in about function to check when an id is on focus and when so, we want to change the active in the table of content
// about javascript code
const aboutImg = document.querySelector('.about-img');
let activeValue = "";
if (window.location.pathname == "/pages/about" || window.location.pathname == "/pages/our_people"){
    // function that returns rect property of a particular element
    activeValue = "About Us"
    const getElementRect = function(e){
       let rect = e.getBoundingClientRect()
       return rect;
    }
    // for image
    aboutImg.style.background ="linear-gradient(#1e5998 0%, #10294c 100%),url('../assets/img/17.jpg')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.height = `${300}px`
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
if(window.location.pathname == "/pages/gallery"){
    const imglikebtn = document.querySelectorAll(".imglike")
    activeValue = "Gallery"    
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
    aboutImg.style.background = "linear-gradient(#1e5998 0%, #10294c 100%),url('../assets/img/galleryheader.png')"
    aboutImg.style.backgroundSize = "cover"    
    aboutImg.style.height = `${300}px`    
}
if(window.location.pathname == "/pages/blog" || window.location.pathname =="/pages/blog-posts"){
    aboutImg.style.background = "linear-gradient(#1e5998 0%, #10294c 100%),url('../assets/img/blog.jpg')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.minHeight = `${300}px`    
    activeValue = "Blog"
    var head = document.getElementsByTagName('HEAD')[0];
    // Create new link Element
    var link = document.createElement('link');
    // set the attributes for link element
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '../css/templatemo-stand-blog.css';
    // Append link element to HTML head
    head.appendChild(link);
}
if(window.location.pathname == "/index"|| window.location.pathname== "/"){
    aboutImg.style.background = "white"
    aboutImg.style.backgroundSize = "cover"
    activeValue = "Home" 
    // text limit for the program card descriptions
    let programDesc = document.querySelectorAll('.programs-card-desc')
    for (const x of programDesc) {
        let newText = x.textContent.substring(0,211)
        x.textContent = newText +"..."
    }
}
if(window.location.pathname == "/pages/digital_rural"){
    aboutImg.style.background= "linear-gradient(#1e5998 0%, #10294c 100%),url('../assets/img/digitalruralheader.png')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.height = `${300}px`
    activeValue = "Programmes"
}
if(window.location.pathname == "/pages/volunteer"){
    activeValue = "volunteer"
    aboutImg.style.background = "linear-gradient(#1e5998 0%, #10294c 100%),url('../assets/img/pexels-rodnae-productions-6646852.jpg')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.height = `${300}px`
}
if (window.location.pathname == "/pages/contact") {
    aboutImg.style.background = "linear-gradient(#1e5998 0%, #10294c 100%),url('../assets/img/contact-us-image.jpg')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.height = `${300}px`
    activeValue =  "Contact"
}
if(window.location.pathname == "/pages/event"){
    aboutImg.style.background = "linear-gradient(#1e5998 0%, #10294c 100%),url('../assets/img/pexels-luis-quintero-2774556.jpg')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.height = `${300}px`
    aboutImg.style.backgroundPosition="center"
    activeValue = "Events"
}
if (window.location.pathname == "/pages/rural_heroes") {
    aboutImg.style.background = "linear-gradient(#1e5998 0%, #10294c 100%),url('../assets/img/BluvardHeroes.jpg')"
    aboutImg.style.backgroundSize = "cover"
    aboutImg.style.height = `${300}px`
    aboutImg.style.backgroundPosition = "top !important"
    activeValue = "Programmes"
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
    if (localStorage.getItem('has_seen') == undefined){
        setTimeout(function () {
            popup.classList.replace('hide', 'show')
            localStorage.setItem('has_seen', '1')
        }, 15000) 
    }else{
       
    }

}

// highlight function to expand divs
let highlight = document.querySelectorAll('.highlight')

for (const x of highlight) {
    let bottom = x.querySelector(':scope > .highlight-bottom')
    let topIcon = x.querySelector(':scope i')
    x.onclick =()=>{
        bottom.classList.toggle('collapse')
        topIcon.classList.toggle('rotate')
    }

}

// for image preveiw
let teamMember = document.querySelectorAll('.team-member')

for (const x of teamMember) {
    let teamModal = x.querySelector(":root .team-modal")
    x.onclick =()=>{
        teamModal.classList.toggle('collapse')
    }
}

// function for adding nav-active to active page
// loop for all the navlinks

let headerLinks = document.querySelectorAll('.nav-link')
for (const x of headerLinks) {
    if(x.textContent == activeValue){
        x.classList.add('nav-active')
    }
}