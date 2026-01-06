document.addEventListener('DOMContentLoaded', function () {
    // Popup Management System
    class PopupManager {
        constructor() {
            this.activePopup = null;
        }

        showPopup(popupId) {
            console.log('Showing popup:', popupId, 'Current active:', this.activePopup);

            // Close any active popup first
            this.closeActivePopup();

            const popup = document.getElementById(popupId);
            if (popup) {
                popup.style.display = 'block';
                this.activePopup = popupId;
                console.log('Popup shown:', popupId);
            } else {
                console.log('Popup not found:', popupId);
            }
        }

        closeActivePopup() {
            if (this.activePopup) {
                console.log('Closing active popup:', this.activePopup);
                const popup = document.getElementById(this.activePopup);
                if (popup) {
                    popup.style.display = 'none';
                }
                this.activePopup = null;
            }
        }

        closePopup(popupId) {
            console.log('Closing specific popup:', popupId);
            const popup = document.getElementById(popupId);
            if (popup) {
                popup.style.display = 'none';
                if (this.activePopup === popupId) {
                    this.activePopup = null;
                }
            }
        }
    }

    const waBtn = document.getElementById('wa-button');
    const waPopup = document.getElementById('wa-popup');
    const waClose = document.getElementById('wa-close');

    // Initialize popup manager
    const popupManager = new PopupManager();
    PopupManager.activePopup = waPopup;
    // Make popup manager globally accessible
    window.popupManager = popupManager;

    // Contact popup handlers
    const contactBtn = document.getElementById('contact-button');
    const contactPopup = document.getElementById('contact-popup');
    const contactClose = document.getElementById('contact-close');

    console.log('Contact elements found:', {
        contactBtn: !!contactBtn,
        contactPopup: !!contactPopup,
        contactClose: !!contactClose
    });

    if (contactBtn) {
        contactBtn.addEventListener('click', (e) => {
            e.preventDefault();
            console.log('Contact button clicked, current active:', popupManager.activePopup);
            if (popupManager.activePopup === 'contact-popup') {
                popupManager.closePopup('contact-popup');
            } else {
                popupManager.showPopup('contact-popup');
            }
        });
    }

    if (contactClose) {
        contactClose.addEventListener('click', (e) => {
            e.preventDefault();
            popupManager.closePopup('contact-popup');
        });
    }

    // WhatsApp popup handlers


    console.log('WhatsApp elements found:', {
        waBtn: !!waBtn,
        waPopup: !!waPopup,
        waClose: !!waClose
    });

    if (waBtn) {
        waBtn.addEventListener('click', (e) => {
            e.preventDefault();
            console.log('WhatsApp button clicked, current active:', popupManager.activePopup);
            if (popupManager.activePopup === 'wa-popup') {
                popupManager.closePopup('wa-popup');
            } else {
                popupManager.showPopup('wa-popup');
            }
        });
    }

    if (waClose) {
        waClose.addEventListener('click', (e) => {
            e.preventDefault();
            popupManager.closePopup('wa-popup');
        });
    }

    // Global escape key handler to close any active popup
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            popupManager.closeActivePopup();
        }
    });

    // Click outside popup to close
    document.addEventListener('click', (e) => {
        const contactPopup = document.getElementById('contact-popup');
        const waPopup = document.getElementById('wa-popup');
        const contactBtn = document.getElementById('contact-button');
        const waBtn = document.getElementById('wa-button');

        // Check if click is outside contact popup
        if (popupManager.activePopup === 'contact-popup' &&
            contactPopup &&
            !contactPopup.contains(e.target) &&
            !contactBtn.contains(e.target)) {
            popupManager.closePopup('contact-popup');
        }

        // Check if click is outside WhatsApp popup
        if (popupManager.activePopup === 'wa-popup' &&
            waPopup &&
            !waPopup.contains(e.target) &&
            !waBtn.contains(e.target)) {
            popupManager.closePopup('wa-popup');
        }
    });
});
