import './bootstrap.js';
import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()

import Swal from 'sweetalert2';
import Filter from 'bad-words';

window.Swal = Swal;
const filter = new Filter();
const toxicWords = 
['bitch','keparat','fuck','bastard','anjing','babi','pantek','bajingan','coli','colmek','pukimak','lonte','dongo','biadab','biadap','ngocok',
'toket','tempek','tomlol','henceut','kanjut','oppai','tetek','kanyut','itil','titit','tytyd','tolol','idiot','bangsat','bangsad','pucek',
'kontol','pantek','memek','puki','jembut','meki','jingan','bodoh','goblok','bokep','dajjal','silit','setan','sange','jancok','dancok','goblog',
'autis','bagong','peler','ngentot','ngentod','ngewe','pler','ngtd','kntl','ajg','njing','njeng','xnxx','xvideos','crot',
'Anjing','Babi','Kunyuk','Bajingan','Asu','Bangsat','Kampret','Kontol','Memek','Ngentot','Pentil','Perek','Pepek','Pecun','Bencong','Banci','Maho'
,'Gila','Sinting','Tolol','Sarap','Setan','Lonte','Hencet','Taptei','Kampang','Pilat','Keparat','Bejad','Gembel','Brengsek','Tai','Anjrit',
'Bangsat','Fuck','Tetek','Ngulum','Jembut','Totong','Kolop','Pukimak','Bodat','Heang','Jancuk','Burit','Titit','Nenen','Bejat','Silit','Sempak',
'Fucking','Asshole','Bitch','Penis','Vagina','Klitoris','Kelentit','Borjong','Dancuk','Pantek','Taek','Itil','Teho','Bejat','Pantat','Bagudung',
'Babami','Kanciang','Bungul','Idiot','Kimak','Henceut','Kacuk','Blowjob','Pussy','Dick','Damn','Ass'];
filter.addWords(...toxicWords);

// submit form from forum
if(document.getElementById('message_form') != null){
    message_form.addEventListener('submit', function(e) {
        e.preventDefault();
        // console.log(message_input.value);
        const pesan = filter.clean(message_input.value);
        // console.log(pesan);
        message_input.value = '';
        livewire.emitTo('forum.chats', 'send',pesan);
    });
}
// listen to channel publicchat
Echo.channel('publicChat')
    .listen('MessagePublic', (e) => {
        livewire.emitTo('forum.chats','refreshComponent');
});
// listen to channel privateChat
Echo.channel('publicChat')
    .listen('MessagePublic', (e) => {
        livewire.emitTo('forum.chats','refreshComponent');
});

Echo.private('notif.'+receiver_id)
    .listen('Notif', function(e){
        Swal.fire({
            position: 'top-end',
            icon: 'info',
            text: 'pesan baru dari '+e.name,
            showConfirmButton: false,
            timer: 2000
        });
    // check apakah user sedang membuka halaman chat
    if(document.getElementById('chat-history') != null){
        const chatHistory = document.getElementById('chat-history');
    
        function scrollToBottom() {
            chatHistory.scrollTop = chatHistory.scrollHeight;
        }
        scrollToBottom();
    }
});

// notif user pesan public telah terkirim
livewire.on('publicMessageSent',()=>{
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        text: 'pesan berhasil terkirim',
        showConfirmButton: false,
        timer: 2000
      });
});
// notif user ketika pesan private telah terkirim
livewire.on('privateMessageSent',(name)=>{
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        text:'pesan anda terkirim ke '+name,
        showConfirmButton: false,
        timer: 2000
      });
});

// notif pencarian user tidak ditemukan
livewire.on('userNotFound',(cariNama) => {
    Swal.fire({
        title: 'Error!',
        text: 'Pencarian user '+cariNama+' tidak ditemukan',
        icon: 'error',
        confirmButtonText: 'sorry'
    });
});
//notif pencarian telah berhasil dan otomatis ditambah ke contact
livewire.on('userFound',(cariNama) => {
    Swal.fire({
        title: 'berhasil!',
        text: 'Pencarian user '+cariNama+' ditemukan dan berhasil ditambahkan ke contact',
        icon: 'success',
        showConfirmButton: false,
        timer: 2000
    });
});
//notif pencarian telah berhasil tetapi user adalah diri sendiri
livewire.on('selfFound',(cariNama) => {
    Swal.fire({
        title: 'found you!',
        text: 'tetapi '+cariNama+' kamu tidak dapat menambahkan diri sendiri ke contact',
        icon: 'error',
        confirmButtonText: 'sorry'
    });
});
// check kata-kata kotor private message
livewire.on('checkMessage',(pesan) => {
    console.log(pesan);
    const p = filter.clean(pesan);
    console.log(p);
    livewire.emitTo('chat.privatechat','send',p);
});



if(document.getElementById('chat-history') != null){
    const chatHistory = document.getElementById('chat-history');

    function scrollToBottom() {
        chatHistory.scrollTop = chatHistory.scrollHeight;
    }
    scrollToBottom();
}


// if(document.getElementById('messageType').value == 'public'){
//   // public message
//   const messages_el = document.getElementById('messages');
//   const message_input = document.getElementById('message_input');
//   const message_form = document.getElementById('message_form');
  
//   message_form.addEventListener('submit', function(e) {
//     e.preventDefault();
  
//     let has_errors = false;
  
//     if(username_input.value == '') {
//       alert('Please enter a username');
//       has_errors = true;
//     }
  
//     if(message_input.value == '') {
//       alert('Please enter a message');
//       has_errors = true;
//     }

//     if(toxicWords.some(v => message_input.value === v)){
//       alert('Speak a good word or remain silent.');
//       has_errors = true;
//     }
  
//     if(has_errors) {
//       return;
//     }
  
//     const options = {
//       method: 'post',
//       url: '/send-message',
//       data: {
//         username: username_input.value,
//         message: message_input.value
//       }
//     }
  
//     axios(options);
//   });
  
//   const chatHistory = document.getElementById('messages');

//   function scrollToBottom() {
//     chatHistory.scrollTop = chatHistory.scrollHeight;
//   }
//   scrollToBottom();

//   window.Echo.channel('publicChat').listen('MessagePublic', (e) => {
//     if(e.username == username_input.value){
//       messages_el.innerHTML += `
//       <div class='message my-message my-2'>${e.message} <strong>:${e.username}</strong></div>
//       `
//     }else {
//       messages_el.innerHTML += `
//       <div class='message other-message my-2'><strong> ${e.username}:</strong> ${e.message}</div>
//       `
//     }
//     scrollToBottom();
//   });
// } else if(document.getElementById('messageType').value == 'private') {
//   // private message
//   const privateMessageElement = document.getElementById('privateMessage');
//   const privateMessageInput = document.getElementById('privateMessageInput');
//   const privateMessageForm = document.getElementById('privateMessageForm');
//   const conversationId = document.getElementById('conversationId');
//   const receiverId = document.getElementById('receiverId');
//   const userId = document.getElementById('userId');
//   const userUsername = document.getElementById('userName');
  
//   privateMessageForm.addEventListener('submit', function(e) {
//     e.preventDefault();
  
//     let has_errors = false;
  
//     if(privateMessageInput.value == '') {
//       alert('Please enter a message');
//       has_errors = true;
//     }

//     if(toxicWords.some(v => privateMessageInput.value === v)){
//       alert('Speak a good word or remain silent.');
//       has_errors = true;
//     }
  
//     if(has_errors) {
//       return;
//     }
  
//     const options = {
//       method: 'post',
//       url: '/send-private-message',
//       data: {
//         conversation_id: conversationId.value,
//         sender_id: userId.value,
//         sender_username : userUsername.value,
//         message: privateMessageInput.value,
//         receiver_id: receiverId.value
//       }
//     }
  
//     axios(options);
//   })


//   const chatHistory = document.getElementById('chat-history');

//   function scrollToBottom() {
//     chatHistory.scrollTop = chatHistory.scrollHeight;
//   }
//   scrollToBottom();
  

//   window.Echo.private('privateChat.' + conversationId.value).listen('MessagePrivate', function(e) {
//     if(e.senderId == userIdLogin){
//       privateMessageElement.innerHTML += `
//       <li class="clearfix">
//         <div class="message my-message float-right">
//         ${e.message}
//         </div>
//       </li>
//       `
//     } else {
//       privateMessageElement.innerHTML += `
//       <li class="clearfix">
//           <div class="message other-message">${e.message}</div>
//       </li>
//       `
//     }
    
//     scrollToBottom();
//   })
// }


// window.Echo.private('notif.' + userIdLogin).listen('Notif', function(e){
//   const Toast = Swal.mixin({
//     toast: true,
//     position: 'top-end',
//     showConfirmButton: false,
//     timer: 3000,
//     timerProgressBar: true,
//     didOpen: (toast) => {
//       toast.addEventListener('mouseenter', Swal.stopTimer)
//       toast.addEventListener('mouseleave', Swal.resumeTimer)
//     }
//   })

//   Toast.fire(swalOption = {
//     icon: 'success',
//     title: 'new message from ' + e.senderUserName
//   })
// });





       