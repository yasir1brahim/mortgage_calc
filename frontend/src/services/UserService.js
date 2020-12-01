import VueCookies from 'vue-cookies'
export function getUser() {

 let userid = VueCookies.get('uid')
 if ( userid == null){
    userid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var dt = new Date().getTime();
        var r = (dt + Math.random()*16)%16 | 0;
        dt = Math.floor(dt/16);
        return (c=='x' ? r :(r&0x3|0x8)).toString(16);
    });
    VueCookies.set('uid',userid);
 }
 console.log('userid',userid);
 return userid;
}