# Docker WordPress container

[![](https://badge.imagelayers.io/libcrack/archlinux-wordpress:latest.svg)](https://imagelayers.io/?images=libcrack/archlinux-wordpress:latest 'libcrack/archlinux-wordpress')

Build the image:

```bash
docker-compose up
```

Run the container:

```bash
docker run -d -p 8000:8000 --name wordpress archlinux-wordpress
```

Alternatively, you can run the image pulling it directly from hub.docker.com:

```bash
docker run -d -p 8000:8000 --name wordpress libcrack/archlinux-wordpress
```

