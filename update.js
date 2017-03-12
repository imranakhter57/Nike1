
function disp_data(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","update.php?status=disp",false);
            xmlhttp.send(null);
            
            document.getElementById("table1").innerHTML = xmlhttp.responseText;
        }
function delete1(id){
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update.php?status=delete&id="+id,false);
    xhr.send(null);
    disp_data()
}
function insert1(){
    var id = document.getElementById("sid1").value;
    var service = document.getElementById("ser1").value;
    var comments = document.getElementById("com1").value;
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update.php?status=insert&id="+id+"&service="+service+"&comments="+comments,false);
    console.log(xhr);
    xhr.send(null);
    disp_data();
    document.getElementById("sid1").value="";
    document.getElementById("ser1").value="";
    document.getElementById("com1").value="";
    
}
function edit1(id){
    var service_no = "service"+id;
    var sid = "sid"+id;

    var service = document.getElementById(service_no).innerHTML;
    document.getElementById(service_no).innerHTML = "<input type='text' value='"+service+"' id='"+sid+"'>";
    
    var comm_id = "comments"+id;
    var cid = "cid"+id;
    var comments = document.getElementById(comm_id).innerHTML;
    document.getElementById(comm_id).innerHTML = "<input type='text' value='"+comments+"' id='"+cid+"'>";
    
    updateid="update1"+id;
    editid="edit1"+id;
    document.getElementById(editid).style.visibility="hidden";
     document.getElementById(updateid).style.visibility="visible";
}

function update1(id){
    var sid = "sid"+id;
    var service = document.getElementById(sid).value;
    updateid="update1"+id;
    editid="edit1"+id;
    var cid = "cid"+id;
    var comment = document.getElementById(cid).value;
    update_value(id,service,comment);
    document.getElementById(editid).style.visibility="visible";
     document.getElementById(updateid).style.visibility="hidden";
     document.getElementById("service"+id).innerHTML = service;
     document.getElementById("comments"+id).innerHTML = comment;
     
}

function update_value(id,service,comment){
    
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update.php?status=update&id="+id+"&service="+service+"&comments="+comment,false);
    xhr.send(null);
    
}