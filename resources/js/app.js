import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function assignRandomReviewer(assignmentId) {
    fetch(`/dashboard/${assignmentId}/assign`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Reviewer berhasil diassign!');
            location.reload(); // Refresh buat update UI
        } else {
            alert('Gagal assign reviewer: ' + data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}

window.assignRandomReviewer = assignRandomReviewer;