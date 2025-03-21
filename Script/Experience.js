let Experience = document.getElementById('Experience_Container'); 

let ehr = new XMLHttpRequest();
ehr.open("GET", "PHP/GetExperience.php", true);
ehr.onload=()=>{
    if(ehr.readyState === XMLHttpRequest.DONE){
        if(ehr.status === 200){
            let data = ehr.response;
            console.log(data); 
            Experience.innerHTML = data

        }
    }
}
ehr.send();