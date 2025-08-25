# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Repository Overview

This is a single-file static personal website for Conner Pangia, featuring a portfolio/blog combination that showcases his dual career as an organic farmer and web developer. The website is built as a self-contained HTML file with embedded CSS and JavaScript.

## Architecture & Structure

### Single-File Architecture
- **index.html**: Complete website with embedded CSS (lines 7-482) and JavaScript (lines 712-792)
- All styling is contained within `<style>` tags using vanilla CSS
- All interactivity handled through vanilla JavaScript (no frameworks)
- Fully self-contained with no external dependencies except YouTube embeds

### Key Features & Sections
- **Hero Section**: Animated landing page with fade-in effects
- **About Section**: Personal story combining farming and web development background
- **Skills Grid**: Four main skill areas with hover animations
- **Projects Grid**: Featured work including farms and websites
- **Blog Section**: Embedded YouTube video + 5 blog posts with comment forms
- **Contact Section**: Professional contact information and links

### Styling Architecture
- **CSS Grid & Flexbox**: Responsive layouts throughout
- **Custom Animations**: CSS keyframes for hero elements, intersection observer for scroll animations
- **Design System**: Consistent gradient color scheme (#667eea to #764ba2), 8px spacing units
- **Responsive Design**: Mobile-first approach with tablet/desktop breakpoints at 768px

### JavaScript Functionality
- Smooth scrolling navigation between sections
- Dynamic header background opacity on scroll
- Intersection Observer API for scroll-triggered animations
- YouTube video embedding with manual video ID updates
- Comment form handling (currently demo functionality)

## Development Commands

### Local Development
```bash
# Serve locally (any simple HTTP server)
python3 -m http.server 8000
# OR
npx serve .
# OR
php -S localhost:8000
```

### File Editing
- No build process required - direct HTML/CSS/JavaScript editing
- Changes are immediately visible on page refresh
- CSS is embedded in `<style>` tags (lines 7-482)
- JavaScript is embedded in `<script>` tags (lines 712-792)

## Content Management

### Blog Posts
- Blog content is hardcoded in HTML (lines 604-676)
- Each post is an `<article>` element with `.post-card` class
- Comment forms are placeholder functionality only

### YouTube Integration
- Latest video manually updated via `latestVideoId` variable (line 762)
- Channel link points to @connerpangia YouTube channel

### Project Updates
- Project cards are static HTML content (lines 556-582)
- External links include live website for Crazy Mama's Creations

## Technical Notes

### Performance Considerations
- Single HTTP request for entire site (no external CSS/JS dependencies)
- Embedded SVG icons for minimal network requests
- Optimized animations using CSS transforms and opacity
- Intersection Observer for efficient scroll-based animations

### Browser Compatibility
- Uses modern JavaScript (async/await, forEach, arrow functions)
- CSS Grid and Flexbox layouts
- IntersectionObserver API (requires modern browsers)
- Smooth scrolling behavior requires CSS `scroll-behavior` support