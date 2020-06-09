/*nuevo validaciones*/

function valpro(){
    var can;
    
    can=document.getElementById("cantidad").value;
  
    if(can>=1){
        return true;
    }else{
          alert(" No has seleccionado ningun articulo.");
          return false;
          }
}

function valProduct(){
    var nombre, cantidad, descripcion, foto, precio, categoria;
    
    nombre=document.getElementById("nombre").value;
    cantidad=document.getElementById("cant").value;
    descripcion=document.getElementById("desc").value;
    foto=document.getElementById("foto").value;
    precio=document.getElementById("precio").value;
    categoria=document.getElementById("categ").value;
    
    if(nombre==="" || cantidad==0 || descripcion==="" || foto==="" || precio==0 || categoria===""){
        alert ("Todos los campos son obligatorios. Falta llenar un(s) campo(s).");
        return false;
    }else if(nombre.length>20){
        alert("El nombre es demasiado largo.");
        return false;
    }else if(descripcion.length>300){
        alert("La descripcion es demasiado larga.");
        return false;
    }else if(cantidad<0 || precio<0){
        alert("No son validos numeros negativos"); 
        return false;
    }else if(categoria=="Ofertas" || categoria=="Flores" || categoria=="Cactus" || categoria=="Orquideas" || categoria=="De sombra" || categoria=="Jardineria"){
        return true;}
        else{
            alert("La categoria no es la correcta [Solo las opciones presentadas].");
        return false;}   
    
}

function valCliente(){
    var nom,pat,mat,usu,fnac,pas1,pas2,ema,tel,cp,est,mun,cal,nc,nta,cvv,fve;
    nom=document.getElementById("nom").value;
    pat=document.getElementById("pat").value;
    mat=document.getElementById("mat").value;
    usu=document.getElementById("usu").value;
    pas1=document.getElementById("pas1").value;
    pas2=document.getElementById("pas2").value;
    ema=document.getElementById("ema").value;
    tel=document.getElementById("tel").value;
    cp=document.getElementById("cp").value;
    est=document.getElementById("est").value;
    mun=document.getElementById("mun").value;
    cal=document.getElementById("cal").value;
    nc=document.getElementById("nc").value;
    nta=document.getElementById("nta").value;
    cvv=document.getElementById("cvv").value;
    fve=document.getElementById("FechaVenc").value;
    
    if(nom==="" || pat==="" || mat==="" || usu==="" || pas1==="" || pas2==="" || ema==="" || cp==="" || est==="" || mun==="" || cal==="" || nta==="" || nc==="" || cvv==="" || fve===""){
        alert ("Todos los campos son obligatorios. Falta llenar un(s) campo(s).");
        return false;
    }else if(nom.length>40 || cal.length>40){
        alert ("El campo es demasiado largo.");
        return false;
    }else if(pat.length>25 || mat.length>25){
        alert ("El apellido es demasiado largo.");
        return false;
    }else if(usu.length>50){
        alert ("El nombre de usuario  es demasiado largo.");
        return false;
    }else if(tel.length!==10){
        alert ("El numero de telefono debe tener 10 digitos.");
        return false;
    }else if(ema.length>70){
        alert ("El correo es demasiado largo.");
        return false;
    }else if(cp.length!==5){
        alert ("El codigo postal esta fuera del rango.");
        return false;
    }else if(mun.length>20 || est.length>20){
        alert ("El campo es demasiado largo.");
        return false;
    }else if(nc.length>5){
        alert ("El N° casa es muy grande.");
        return false;
    }else if(nta.length!==16){
        alert ("El numero de tarjeta debe contener 16 digitos.");
        return false;
    }else if(cvv.length<3 || cvv.length>4){
        alert ("El cvv no es valido.");
        return false;
    }else if(pas1==pas2){
        return true;
    }else{
        alert ("Las claves del usuario son distintas.");
        return false;
    }
}