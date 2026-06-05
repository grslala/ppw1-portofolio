// Fungsi ini dipanggil dari tugas1-penulisan-js.html setelah halaman selesai dimuat
function jalankanScriptEksternal() {
 
  // Output: console.log
  console.log("=== [EKSTERNAL] ===");
  console.log("Script eksternal 'kode-eksternal.js' berhasil dimuat!");
  console.log("Disisipkan via: <script src='kode-eksternal.js'></script>");
 
  // Output: innerHTML — tulis ke elemen HTML tertentu
  var el = document.getElementById("output-eksternal");
  if (el) {
    el.innerHTML =
      "✅ Ini ditulis oleh <strong>script eksternal</strong> " +
      "(<code>kode-eksternal.js</code>) menggunakan <code>innerHTML</code>.";
    el.className = "border rounded p-2 bg-white text-dark";
  }
}
 