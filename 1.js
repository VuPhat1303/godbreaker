
    var giohang = sessionStorage.getItem("giohang") ? JSON.parse(sessionStorage.getItem("giohang")) : new Array();
    document.getElementById("showcart").style.display = "none";
    function them(x) {
    var a = x.parentElement.children[0];
    var img = a.children[0].src;
    var price = a.children[1].children[0].innerHTML;
    var name = a.children[2].innerHTML;
    var sl = parseInt(a.children[3].value);
    var sp = new Array (img,price,name,sl);
    //kt
    var kt = 0;
    for(let i=0;i<giohang.length;i++){
        if(giohang[i][2] == name){
            kt = 1;
            sl += parseInt(giohang[i][3]);
            giohang[i][3] = sl;
            break;
        }
    }
    if (kt == 0){
        giohang.push(sp);
    }
    
    console.log(giohang);
    showcart();

    sessionStorage.setItem("giohang",JSON.stringify(giohang));


    
    }


    function showcart() {
        var ttgh = "";
        var tt = 0;
        for(let i=0;i < giohang.length;i++){
            var tong = parseInt(giohang[i][1]) * parseInt(giohang[i][3]);
            tt += tong;
            ttgh += '<tr class="cart-item1">'+
                '<td class="product-thumbnail"><img style="height:65px; width: 69px;" src="'+giohang[i][0]+'" alt=""></td>'+
                '<td class="product-name">'+giohang[i][2]+'</td>'+
                '<td class="product-price"  >'+giohang[i][1]+'<a>đ</a></td>'+
                '<td class="product-sl">'+giohang[i][3]+'</td>'+
                '<td ><a class="buton" onclick="xoasp(this)">x</a></td>'+
                '</tr>';
        }

        ttgh += '<tr style="background-color: #eceeef ;">'+
        '<td style="font-weight: bolder;">Tổng :</td>'+
        '<td></td>'+
        '<td style="font-weight: bolder;">'+tt+'<a>đ</a></td>'+
        '<td></td>'+
        '<td> <a  onclick="kt(this)" id = "kt"  class="checkout">Thêm Vào Giỏ Hàng</a></td>'+
        '</tr>'
        document.getElementById("giohangchitiet").innerHTML = ttgh;
    }   









    function showmycart(){
        
    var x = document.getElementById("showcart");
    if(x.style.display == "block"){
        x.style.display = "none";
    }else{
        
        x.style.display = "block";
    }
    






}

function showtrang() {
    var gh = sessionStorage.getItem("giohang");
    var giohang = JSON.parse(gh);
    var ttgh = "";
    var tt = 0;
    for(let i=0;i < giohang.length;i++){
        var tong = parseInt(giohang[i][1]) * parseInt(giohang[i][3]);
        tt += tong;
        ttgh += '<tr class="cart-item1">'+
            '<td class="product-thumbnail"><img style="height:65px; width: 69px;" src="'+giohang[i][0]+'" alt=""></td>'+
            '<td class="product-name">'+giohang[i][2]+'</td>'+
            '<td class="product-price"  >'+giohang[i][1]+'<a>đ</a></td>'+
            '<td class="product-sl">'+giohang[i][3]+'</td>'+
            '<td ><a style="cursor: pointer;" onclick="xoasp1(this)">x</a></td>'+
            '</tr>';
    }

    ttgh += '<tr style="background-color: #eceeef ;">'+
    '<td colspan="4" style="font-weight: bolder; text-align: center;">Tổng</td>'+
    '<td style="font-weight: bolder; text-align: center;">'+tt+'<a>đ</a> </td>'+
    '</tr>'
    
    
    
    
    document.getElementById("giohangchitiet").innerHTML = ttgh;

}

function giohangnew(){
    var gh = sessionStorage.getItem("giohang");
    var gh1 = JSON.parse(gh);
    var ttghm ="";
    var ship = 30000;
    var tt =0;
    for(let i=0;i < gh1.length;i++){
        var tong = parseInt(gh1[i][1]) * parseInt(gh1[i][3])  ;
        tt += tong ;
        tt1 = tt + parseInt(ship);
        ttghm = 
                '<tr style="transform: translateY(10px);">'+
                    '<th>Phí vận chuyển</th>'+
                    '<td>'+
                        '<ul>'+
                            '<input type="radio" checked="">'+
                            '<label for="">Giao hàng COD (30.000đ)</label>'+
                        '</ul>'+
                    '</td>'+
                '</tr>'+
                '<tr>'+
                    '<th>Tổng cộng</th>'+
                    '<td style=" font-weight: bolder; text-align: center;">'+tt1+'<i>đ</i></td>'+
                '</tr>'
                
    }
    document.getElementById("show").innerHTML = ttghm;
    
    


}

function xoasp(x){
    var tr = x.parentElement.parentElement;
    var tensp = tr.children[1].innerHTML;
    tr.remove();
    for( let i=0;i < giohang.length;i++){
        if(giohang[i][2] == tensp ){
            giohang.splice(i,1);
       }

    }

    
    
    
        

    
    
    showcart();
}
function xoasp1(x){
    var tr = x.parentElement.parentElement;
    var tensp = tr.children[1].innerHTML;
    tr.remove();
    for( let i=0;i < giohang.length;i++){
        if(giohang[i][2] == tensp ){
            giohang.splice(i,1);
       }

    }
    console.log(giohang);


}


function kt(x){
    var tr = x.parentElement.parentElement;
    var price = tr.children[2].innerHTML;
    var price1 = parseInt(price);
    var str =['<a class="checkout1 "  href="giohang.php">Vào Trang giỏ hàng</a>'];
    
      if (price1 == 0) {
          
          alert("không có sản phẩm ");
          
      } else {
        document.getElementById("kt").innerHTML = str;
          
          
      }
    


}


    











