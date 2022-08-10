// on scroll function in about.php function to check when an id is on focus and when so, we want to change the active in the table of content
// about.php javascript code
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

    window.onscroll=()=> {
        for(x of pageContent){
            // console.log(x.getAttribute('id'))
            if(tableContent.offsetTop >= x.offsetTop && tableContent.offsetTop <= x.offsetTop+getElementRect(x).height){
                for (const y of aboutListItem) {
                    if(y.getAttribute('name')==x.getAttribute('id')){
                        y.setAttribute('class',"list-group-item active")
                    }else{
                        y.setAttribute('class',"list-group-item")
                    }
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

if(window.location.pathname == "/index.php"){
    // text limit for the program card descriptions
    let programDesc = document.querySelectorAll('.programs-card-desc')
    for (const x of programDesc) {
        let newText = x.textContent.substring(0,211)
        x.textContent = newText +"..."
    }
}