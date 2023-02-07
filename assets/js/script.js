function reviews () {
fetch('https://mybusiness.googleapis.com/v4/accounts/danieljhaymond@gmail.com/locations/ChIJ1S-SARuWTYcRzxjbgtN-0vs/reviews', {
  
    web:{
        client_id:"290428479485-3g450rd8qpv38u7hb0e473dbe4gd39cm.apps.googleusercontent.com",
        project_id:"choose-blue-ladder",
        auth_uri:"https://accounts.google.com/o/oauth2/auth",
        token_uri:"https://oauth2.googleapis.com/token",
        auth_provider_x509_cert_url:"https://www.googleapis.com/oauth2/v1/certs",
        javascript_origins:["https://chooseblueladder.com","http://localhost"]}
})
.then(response => response.text())


.then(text => console.log(text))
}

reviews();