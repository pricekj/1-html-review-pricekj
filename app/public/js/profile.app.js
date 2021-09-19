    const Profile = ({
        data() {
            return {
             username: '',
             usercountry: '',
             useremail: '',
             userdob: '',
             userage: '',
        }
    },

    created() {

        fetch('https://randomuser.me/api/')
        .then(response => response.json())
        .then(data =>  {
            var userdata = data.results[0]
            console.log(userdata)
            this.username = userdata.name.first + " " + userdata.name.last;
            this.usercountry = userdata.location.country;
            this.useremail = userdata.email;
            this.userdob = userdata.dob.date.split("");
            this.userage = userdata.dob.age;
            this.userpic = userdata.picture.large;

        })
        }   

    })
Vue.createApp(Profile).mount('#usern');
