# Conner Pangia Personal Website

A professional portfolio website showcasing expertise in organic farming and web development.

## Features

### ✅ **Completed Features**
- **Responsive Design**: Mobile-first approach with hamburger menu
- **Professional Portfolio**: Project showcase with detailed technology stacks
- **Contact Form**: Functional PHP backend with email notifications
- **Photo Gallery**: Organized farm photo gallery with filtering
- **Certifications Page**: Professional credentials and education display
- **SEO Optimized**: Meta tags, Open Graph, and structured data
- **Accessibility**: WCAG compliant with keyboard navigation and screen reader support
- **Performance**: Lazy loading, optimized images, and caching headers

### 🛠️ **Technology Stack**
- **Frontend**: HTML5, CSS3, Vanilla JavaScript
- **Backend**: PHP (contact form)
- **Hosting**: Compatible with standard web hosting
- **External Services**: 
  - LocalLine (farm sales platform)
  - Happy Now Farm website integration
  - YouTube video embedding

## File Structure

```
newPersonalWebsite/
├── index.html              # Main homepage
├── gallery.html           # Farm photo gallery
├── certifications.html    # Credentials page
├── styles.css             # Main stylesheet
├── gallery.js             # Gallery functionality
├── contact.php            # Contact form backend
├── .htaccess              # Server configuration
├── CLAUDE.md              # Development guidance
├── og-image.svg           # Open Graph social sharing image
├── create-og-image.html   # OG image generator
└── README.md              # This file

# Required Images (add these files):
├── conner.jpeg            # Profile photo
├── happynowfarm2.jpeg     # Happy Now Farm project image
├── PVF.jpeg              # Pleasant Valley Farm project image
├── Krissy.jpeg           # Crazy Mama's Creations project image
├── resume.txt            # Resume file (downloadable)
└── [gallery photos]      # Add your farm photos here
```

## Setup Instructions

### 1. **Upload Files**
- Upload all files to your web hosting directory
- Ensure PHP is enabled on your hosting service

### 2. **Add Your Images**
Add these image files to complete the website:
- `conner.jpeg` - Your profile photo for the About section (recommended: 600x600px minimum)
- `happynowfarm2.jpeg` - Happy Now Farm project showcase (recommended: 800x600px minimum)
- `PVF.jpeg` - Pleasant Valley Farm distribution system image (recommended: 800x600px minimum)
- `Krissy.jpeg` - Crazy Mama's Creations website screenshot (recommended: 800x600px minimum)
- `resume.txt` - Your resume file (will download as "Conner_Pangia_Resume.txt")

**Image Quality Tips:**
- Use high-resolution images (at least 2x the display size)
- Save as JPEG with 85-95% quality for photos
- Keep file sizes under 500KB for web performance
- Ensure images are properly oriented before upload

### 3. **Configure Contact Form**
Edit `contact.php` and update:
```php
$to_email = 'your-email@example.com'; // Your email address
```

### 4. **Add Gallery Photos**
1. Upload your farm photos to the website directory
2. Edit `gallery.html` and replace photo placeholders:
```html
<!-- Replace this: -->
<div class="photo-placeholder">
    <span class="placeholder-text">Upload your photos here</span>
</div>

<!-- With this: -->
<img src="your-photo.jpg" alt="Description of photo" class="gallery-photo">
```

### 5. **Update Certifications**
Edit `certifications.html` to add your actual certifications:
1. Replace placeholder text with real certification details
2. Upload certificate images/PDFs
3. Update links and completion dates

### 6. **Domain Configuration**
If you have a custom domain, update these files:
- `index.html` - Update meta tags with your domain
- `.htaccess` - Uncomment and configure redirects if needed

## Development Notes

### **Project Information Added**
- **Happy Now Farm**: Temperature sensors, Google Sheets, LocalLine, Farmers Markets
- **Pleasant Valley Farm**: Airtable, LocalLine, Avery, Road Warrior, Zapier, Cameras, Greenhouse systems
- **Crazy Mama's Creations**: HTML, CSS, JavaScript, Porkbun hosting, GitHub management

### **Contact Form Backend**
- PHP script handles form submissions
- Email validation and sanitization
- JSON responses for frontend integration
- Error handling and logging

### **Performance Features**
- Lazy loading for YouTube videos
- Optimized images with `object-fit`
- Minified and cached assets via `.htaccess`
- Mobile-optimized navigation

## Browser Support

- **Modern Browsers**: Chrome, Firefox, Safari, Edge (latest versions)
- **Mobile**: iOS Safari, Android Chrome
- **Features**: CSS Grid, Flexbox, ES6 JavaScript
- **Accessibility**: Screen readers, keyboard navigation

## Hosting Requirements

- **Web Server**: Apache or Nginx
- **PHP**: Version 7.0+ (for contact form)
- **SSL Certificate**: Recommended for production
- **Email**: Server must support PHP `mail()` function

## Customization

### **Colors**
Main color scheme defined in CSS variables:
- Primary: `#667eea`
- Secondary: `#764ba2`
- Update these in `styles.css` for brand consistency

### **Content Updates**
- Blog posts: Edit the blog section in `index.html`
- Project details: Update project cards with new information
- Skills: Modify the skills grid with your expertise areas

## Deployment

1. **Test Locally**: Use a local PHP server for testing
2. **Upload Files**: Transfer all files via FTP/SFTP
3. **Test Contact Form**: Ensure email delivery works
4. **Check Mobile**: Test responsive design on various devices
5. **SEO Check**: Verify meta tags and structured data

## Support

For technical assistance or questions about this website:
- Review the `CLAUDE.md` file for development guidance
- Check browser developer tools for JavaScript errors
- Ensure PHP error logging is enabled for debugging

---

**Last Updated**: January 2025  
**Version**: 2.0  
**Built with**: HTML5, CSS3, JavaScript, PHP