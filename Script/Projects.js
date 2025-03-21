let Projects = document.getElementById('Project_Container'); 

let xhr = new XMLHttpRequest();

xhr.open("GET", "PHP/GetProjects.php", true);
xhr.onload=()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response; 
            Projects.innerHTML = data;
        }
    }
}
xhr.send();