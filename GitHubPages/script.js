// Fetch projects from GitHub API
async function fetchProjects() {
    const username = "fabricio"; // Substitua pelo seu username do GitHub
    const url = `https://api.github.com/users/${username}/repos?sort=updated`;

    try {
        const response = await fetch(url);
        const repos = await response.json();

        const projectsList = document.getElementById("projects-list");

        repos.forEach(repo => {
            const listItem = document.createElement("li");
            listItem.innerHTML = `
                <a href="${repo.html_url}" target="_blank">${repo.name}</a>
                <p>${repo.description || "Sem descrição"}</p>
            `;
            projectsList.appendChild(listItem);
        });
    } catch (error) {
        console.error("Erro ao buscar projetos:", error);
    }
}

fetchProjects();