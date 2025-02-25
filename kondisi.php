<?php

function getInput($prompt) {
    echo $prompt;
    return trim(fgets(STDIN));
}

$motivations = [
    "🌟 Jangan pernah menyerah! Setiap usaha pasti ada hasilnya.",
    "🚀 Kesuksesan adalah hasil dari kerja keras dan doa yang tulus.",
    "💡 Hari ini sulit? Ingat, besok adalah awal yang baru!",
    "🔥 Kamu lebih kuat dari yang kamu pikirkan. Tetap semangat!",
    "🌈 Percayalah pada proses. Hasil akan datang pada waktunya.",
    "🏆 Pemenang adalah mereka yang tidak takut untuk gagal.",
    "🌟 Keberanian terbesar adalah melangkah meskipun takut.",
    "💪 Setiap kesulitan membawa pelajaran berharga. Tetap maju!",
    "🚀 Mulai dari langkah kecil, karena setiap langkah itu penting.",
    "🌻 Jika kamu jatuh 7 kali, bangkitlah 8 kali."
];

$name = getInput("Masukkan nama Anda: ");
echo "\nHalo, $name! Selamat datang di program ini.\n";

while (true) {
    echo "\n=====================================\n";
    echo "Pilih opsi berikut:\n";
    echo "1. Lihat pesan motivasi\n";
    echo "2. Periksa apakah angka ganjil/genap\n";
    echo "3. Keluar\n";
    echo "=====================================\n";

    $choice = getInput("Masukkan pilihan Anda (1-3): ");

    switch ($choice) {
        case "1":
            $randomMotivation = $motivations[array_rand($motivations)];
            echo "\n$randomMotivation\n";
            break;

        case "2":
            $num = getInput("\nMasukkan angka: ");
            if (is_numeric($num)) {
                $num = (int)$num;
                if ($num % 2 == 0) {
                    echo "🔢 Angka $num adalah **GENAP**.\n";
                } else {
                    echo "🔢 Angka $num adalah **GANJIL**.\n";
                }
            } else {
                echo "⚠️ Harap masukkan angka yang valid!\n";
            }
            break;

        case "3":
            echo "\n👋 Terima kasih telah menggunakan program ini, $name! Sampai jumpa.\n";
            exit;

        default:
            echo "⚠️ Pilihan tidak valid! Silakan pilih 1-3.\n";
    }
}
?>
