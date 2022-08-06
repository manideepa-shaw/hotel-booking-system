img=['https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/238907099.jpg?k=b2e9707bcc196cc4fe98df5067787772529f79bb562cc04ad4e613b2ac8c693b&o=&hp=1','https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/223591468.jpg?k=04f3536ed390f508a93e920f3678a8f08797699c394a068d26585ead627ccf3a&o=&hp=1','https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/275942850.jpg?k=d4382b685c3fba8b92dd991eec122c056fc037a5e2335387e346d41fc69dde00&o=&hp=1','https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/52301949.jpg?k=ea0d928299c82dd862bb23b7bba6f17991b9730aa09b1c91df122f9fc92fd343&o=&hp=1'];
// i=document.getElementById('img2');
let c=0;
setInterval(() => {
    if(c==3)
    {
        c=0;
    }
    document.getElementById('img2').src=img[c];
    c=c+1;

}, 2000);