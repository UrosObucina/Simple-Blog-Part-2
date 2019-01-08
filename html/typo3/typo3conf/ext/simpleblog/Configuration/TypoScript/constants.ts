
plugin.tx_simpleblog_simplebloglist {
    view {
        # cat=plugin.tx_simpleblog_simplebloglist/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:simpleblog/Resources/Private/Templates/
        # cat=plugin.tx_simpleblog_simplebloglist/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:simpleblog/Resources/Private/Partials/
        # cat=plugin.tx_simpleblog_simplebloglist/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:simpleblog/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_simpleblog_simplebloglist//a; type=string; label=Default storage PID
        storagePid =
    }
}
