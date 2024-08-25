// Tugas Conditional
var nama = "Dany"
var peran = "Sage"

if(nama == "" && peran == "") {
    console.log("Nama dan peran harus diisi");
}else if(nama != "") {
    if (peran == "") {
        console.log("Halo " + nama + " Pilih peranmu untuk memulai game");
    }else if(peran == "Sage"){
        console.log("Halo Sage " + nama + ", Kamu dapat melihat siapa yang menjadi warewolf");
    }else if (peran == "Guard"){
        console.log("Halo Guard "+ nama + ", Kamu kamu akan membantu melindungi temanmu dari serangan warewolf");
    }else if (peran == "Warewolf"){
        console.log("Selamat datang di Dunia Warewolf "+ nama +", Halo Warewolf" +" "+ nama + " Kamu akan memakan mangsa setiap malam!");
    }
    else{
        console.log("404 Peran tidak ditemukan!");
    }
}else{
    console.log("Inputkan nama terlebih dahulu!");
}