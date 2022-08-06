images=['https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Manali-1581428152.jpg','https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Puri-1581427722.jpg','https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Mumbai-1581426263.jpg','https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Udaipur-1581427164.jpg']
names=['Manali','Puri','Mumbai','Udaipur']
let i1=document.getElementById('i1');
setInterval(() => {
    document.getElementById('i1').src=images[0];
    document.getElementById('i1-h').innerHTML=names[0];
}, 2000);
setInterval(() => {
    document.getElementById('i1').src='https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Maldives-1581454743.jpg';
    document.getElementById('i1-h').innerHTML='Maldives';
}, 4000);
setInterval(() => {
    document.getElementById('i2').src=images[1];
    document.getElementById('i2-h').innerHTML=names[1];
}, 2300);
setInterval(() => {
    document.getElementById('i2').src='https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Langkawi-1581455255.jpg';
    document.getElementById('i2-h').innerHTML='Langkawi';
}, 4600);
setInterval(() => {
    document.getElementById('i3').src=images[2];
    document.getElementById('i3-h').innerHTML=names[2];
}, 2000);
setInterval(() => {
    document.getElementById('i3').src='https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Goa-1580994111.jpg';
    document.getElementById('i3-h').innerHTML='Goa';
}, 4000);
setInterval(() => {
    document.getElementById('i4').src=images[3];
    document.getElementById('i4-h').innerHTML=names[3];
}, 2300);
setInterval(() => {
    document.getElementById('i4').src='https://cdn1.goibibo.com/voy_ing/t_g/New_dWeb_Homepage_Shimla-1581427547.jpg';
    document.getElementById('i4-h').innerHTML='Shimla';
}, 4600);

