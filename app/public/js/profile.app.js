var app = new Vue({

    el : '#usern',
    data: {

        username: '',
        usercountry: '',
        useremail: '',
        userdob: '',
        userage: '',
    },

    created() {
        this.fetchuser
    },
    fetch: function(){
        fetch('https://randomuser.me/api/')
        .then( response => response.json() )
        .then( (data=>  {
            var userdata = data.results[0]
            console.log(userdata)
            this.username = userdata.person.name.first + "" + userdata.person.name.last;
            this.usercountry = userdata.person.country;
            this.useremail = userdata.person.email;
            this.userdob = userdata.person.dob;
            this.userage = userdata.person.age; 

        }));
        }

    })
    
