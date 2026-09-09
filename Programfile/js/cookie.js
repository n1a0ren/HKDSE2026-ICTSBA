function getCookie(name) {
    const cookies = document.cookie.split('; ');
    for (let cookie of cookies) {
        const eqIndex = cookie.indexOf('=');
        if (eqIndex === -1) continue;
        const key = cookie.substring(0, eqIndex);
        const value = cookie.substring(eqIndex + 1);
        if (key === name) {
            return decodeURIComponent(value);
        }
    }
    return null;
}

document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('username');
    if (!container) return;

    function render() {
        const user = getCookie('isUserLoggedIn');
        const html = (user && user !== '') ? `<a class="rd-nav-link" href="#">${user}</a>` : `<a class="rd-nav-link" href="#">Login</a>`;
        if (container.innerHTML !== html) {
            container.innerHTML = html;
        }
    }

    // 监听容器自身的子节点变化
    const observer = new MutationObserver(() => {
        // 如果内容为空或不是链接，重新渲染
        if (!container.querySelector('.rd-nav-link')) {
            render();
        }
    });
    observer.observe(container, { childList: true, subtree: false });

    // 同时监听容器的父级（以防父级被整体替换）
    const parent = container.parentNode;
    if (parent) {
        const parentObserver = new MutationObserver(() => {
            // 如果 container 被移除了，重新插入（但这种情况较复杂，先忽略）
            // 可以尝试重新获取 container
            const newContainer = document.getElementById('username');
            if (!newContainer) {
                // 如果容器被删除了，可能需要重新创建，但这里简单处理
                return;
            }
            // 如果容器内容丢失，重新渲染
            if (!newContainer.querySelector('.rd-nav-link')) {
                render();
            }
        });
        parentObserver.observe(parent, { childList: true, subtree: true });
    }

    // 首次渲染
    render();
});
