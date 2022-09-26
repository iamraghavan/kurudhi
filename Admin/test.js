const buttonele = document.getElementById('buttonID');


buttonele.addEventListener('click',()=>{

    //    swal("Hello World")

    Notification.requestPermission().then(requestParameter => {

        if(requestParameter === "granted"){
           const notification = new Notification("Example Notification",{
                body : "This is more Text",
                data: {
                    hello : "world"},
                icon : "https://firebasestorage.googleapis.com/v0/b/portfolio-4bf1c.appspot.com/o/CRW%201instaLogo.png?alt=media&token=075a78d5-3efc-4781-bff6-3e2af506bf6e"
            })
        }
        notification.addEventListener("error",e =>{
            swal("error")
        })

        // if(requestParameter === "granted"){ 
        // }

    })

});