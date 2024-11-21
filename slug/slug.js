document.addEventListener("DOMContentLoaded", () => {
    const tituloInput = document.getElementById("titulo");
    const slugInput = document.getElementById("slug");

    tituloInput.addEventListener("input", () => {
        const titulo = tituloInput.value;
        const slug = gerarSlug(titulo);
        slugInput.value = slug;
    });

    function gerarSlug(texto) {
        return texto
            .toLowerCase() // Converte para minúsculas
            .trim() // Remove espaços extras
            .normalize("NFD") // Normaliza caracteres especiais
            .replace(/[\u0300-\u036f]/g, "") // Remove acentos
            .replace(/[^a-z0-9\s-]/g, "") // Remove caracteres especiais
            .replace(/\s+/g, "-"); // Substitui espaços por traços
    }
});
