import './bootstrap.js';
import Alpine from 'alpinejs'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'


Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(NotificationsAlpinePlugin)

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
        livewire.emitTo('chat.privatechat','refreshChat');
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
    const p = filter.clean(pesan);
    livewire.emitTo('chat.privatechat','send',p);
});

livewire.on('serviceAdded',()=>{
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        text:'user dengan role service berhasil ditambahkan',
        showConfirmButton: false,
        timer: 2000
    });
});

livewire.on('serviceUpdated',()=>{
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        text:'profile anda berhasil diperbarui dan akan ditampilkan di halaman service',
        showConfirmButton: false,
        timer: 4000
    });
});

if(document.getElementById('chat-history') != null){
    const chatHistory = document.getElementById('chat-history');

    function scrollToBottom() {
        chatHistory.scrollTop = chatHistory.scrollHeight;
    }
    scrollToBottom();
}


