<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'imports.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>React Class Component with ButtonAppBar</title>
  <!-- React -->
  <style>
    .col-6 {
      max-width: 50%;
      flex: 0 0 50%;
    }

    h1 {
      font-size: 4rem;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: Poppins, sans-serif;
      font-weight: 700;
      line-height: 1.2;
      color: #333;
    }
  </style>
</head>
<body>
  <div id="nav"></div>
  <script type="text/babel">
    const {
      AppBar,
      Box,
      Toolbar,
      Typography,
      Button,
      IconButton,
      SwipeableDrawer,
      List,
      ListItem,
      ListItemText,
      Grid
    } = MaterialUI;

    function ButtonAppBar() {
      const [drawerOpen, setDrawerOpen] = React.useState(false);
      const [isMobile, setIsMobile] = React.useState(false);

      React.useEffect(() => {
        function handleResize() {
          setIsMobile(window.innerWidth < 600);
        }
        window.addEventListener('resize', handleResize);
        handleResize();
        return () => window.removeEventListener('resize', handleResize);
      }, []);

      const toggleDrawer = (open) => (event) => {
        if (
          event &&
          event.type === 'keydown' &&
          (event.key === 'Tab' || event.key === 'Shift')
        ) {
          return;
        }
        setDrawerOpen(open);
      };

      const menuButtons = (
        <>
          <Button Link href="index.php" color="inherit">Inicio</Button>
          <Button Link href="perfumes.php" color="inherit">Catalogo</Button>
          <Button Link href="dashboard.php" color="inherit">Usuario</Button>
          <Button Link href="wishlist.php" color="inherit">Favoritos</Button>
          <Button Link href="contact-us.php" color="inherit">Contato</Button>
        </>
      );

      const menuList = (
        <List>
          {menuButtons}
        </List>
      );

      return (
        <Box sx={{ flexGrow: 1 }}>
          <AppBar position="absolute" sx={{ bgcolor: '#121212' }}>
            <Toolbar>
              {isMobile ? (
                <>
                  <Typography variant="h6" component="div" sx={{ flexGrow: 1 }}>
                    <img src='assets/images/logo.png' style={{ height: '32px' }} />
                  </Typography>
                  <IconButton
                    edge="end"
                    color="inherit"
                    aria-label="menu"
                    onClick={toggleDrawer(true)}
                  >
                    <span className="material-icons">menu</span>
                  </IconButton>
                </>
              ) : (
                <>
                  <img src='assets/images/logo.png' style={{ height: '32px', marginRight: '16px' }} />
                  <Typography variant="h6" component="div" sx={{ flexGrow: 1 }} />
                  {menuButtons}
                </>
              )}
                          </Toolbar>
          </AppBar>
          <SwipeableDrawer
            anchor="right"
            open={drawerOpen}
            onClose={toggleDrawer(false)}
            onOpen={toggleDrawer(true)}
          >
            <Box
              sx={{ width: 250 }}
              role="presentation"
              onClick={toggleDrawer(false)}
              onKeyDown={toggleDrawer(false)}
            >
              {menuList}
            </Box>
          </SwipeableDrawer>
        </Box>
      );
    }
     function Banner() {
      return (
      <Box sx={{ flexGrow: 1  }}>
  <Grid container spacing={2}>
    <Grid item className="col-6">
      <Box sx={{ minHeight: '300px', display: 'flex', flexDirection: 'column', justifyContent: 'flex-end' }}>
        <Typography variant="h1">Texto do Banner</Typography>
        <Button href="login.php" variant="contained" color="primary">Login</Button>
      </Box>
    </Grid>
    <Grid item className="col-6">
      <Box sx={{ minHeight: '300px', bgcolor: 'lightblue' }}>
        {/* Insira o conteúdo do banner aqui */}
      </Box>
    </Grid>
  </Grid>
</Box>
      );
    }

    class App extends React.Component {
      render() {
        return (
          <div>
            <ButtonAppBar />
            <Banner />
          </div>
        );
      }
    }

    ReactDOM.render(<App />, document.getElementById('nav'));
  </script>
</body>
</html>
           
