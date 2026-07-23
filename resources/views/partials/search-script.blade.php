<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchSuggestions = document.getElementById('searchSuggestions');
    const searchSpinner = document.getElementById('searchSpinner');
    let searchTimeout;

    if (!searchInput) return; // Exit if search input doesn't exist

    // Search input event
    searchInput.addEventListener('input', function() {
        const query = this.value.trim();
        
        // Clear previous timeout
        clearTimeout(searchTimeout);
        
        // Hide suggestions if query is empty
        if (query.length === 0) {
            searchSuggestions.classList.remove('show');
            searchSpinner.classList.remove('show');
            return;
        }
        
        // Show spinner
        searchSpinner.classList.add('show');
        
        // Debounce search - wait 300ms after user stops typing
        searchTimeout = setTimeout(function() {
            performSearch(query);
        }, 300);
    });

    function performSearch(query) {
        fetch(`/api/search-pages?q=${encodeURIComponent(query)}`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            displayResults(data);
            searchSpinner.classList.remove('show');
        })
        .catch(error => {
            console.error('Search error:', error);
            searchSpinner.classList.remove('show');
            searchSuggestions.innerHTML = '<div class="no-results">Error loading results</div>';
            searchSuggestions.classList.add('show');
        });
    }

    function displayResults(pages) {
        if (pages.length === 0) {
            searchSuggestions.innerHTML = '<div class="no-results">No results found</div>';
            searchSuggestions.classList.add('show');
            return;
        }

        let html = '';
        pages.forEach(page => {
            const excerpt = page.excerpt || (page.content ? page.content.substring(0, 100) : '');
            const pageUrl = `${page.slug}`;
            html += `
                <a href="${pageUrl}" class="suggestion-item text-decoration-none" style="display: block; color: inherit;">
                    <div class="suggestion-title">${escapeHtml(page.title)}</div>
                    <div class="suggestion-excerpt">${escapeHtml(excerpt)}${excerpt.length > 0 ? '...' : ''}</div>
                </a>
            `;
        });

        searchSuggestions.innerHTML = html;
        searchSuggestions.classList.add('show');
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // Close suggestions when clicking outside
    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !searchSuggestions.contains(e.target)) {
            searchSuggestions.classList.remove('show');
        }
    });

    // Show suggestions when focusing on input if there's content
    searchInput.addEventListener('focus', function() {
        if (this.value.trim().length > 0 && searchSuggestions.innerHTML !== '') {
            searchSuggestions.classList.add('show');
        }
    });
});
</script>
