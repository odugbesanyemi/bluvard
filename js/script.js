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
