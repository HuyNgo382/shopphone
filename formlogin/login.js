function doLogin() {
    // email = document.getElementById('email1').value;
    // password = document.getElementById('password1').value;
    // login(email, password )
    alert(' ok nhận')

}
function login(email , password) {
let params = {'email' :email , 'password' : password }
 $.post('login.php' , params ,function(data){
    let res = JSON.parse(data) 
        if(res.status == 200) {
            window.location = 'index.php';
        }else {
            alert('Login Failed');
        }
 })
}
register
function doRegister() {
    let email = document.getElementById('email2').value
    let password = document.getElementById('password2').value
    register(email , password)
}
function register(email , password) {
    let paranms  = {'email' : email , 'password' :password}
    $.post('login.php' , paranms , function(data){
         
        let res = JSON.parse(data)
        if(res.code == true) {
            window.location = 'login.php'
        }else {
            alert('register Fail')
        }
    })
}