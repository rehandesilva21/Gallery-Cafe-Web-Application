<section>
        <div class="settings" id="settings">
            <h1>Settings</h1>
            <div class="settings-panel">
                <div class="set-tags">
                    <h3>System Version</h3>
                </div>
                <div class="set-tags">
                    <h3>Manufacture ID</h3>
                </div>
                <div class="set-tags">
                    <h3>User Name</h3>
                </div>
                <div class="set-tags">
                    <h3>User Type</h3>
                </div>
                <div class="set-tags">
                    <h3>Running On</h3>
                </div>
                <div class="set-tags">
                    <h3>Last Loging </h3>
                </div>
                <div class="set-tags set-delete">
                    <h3 class="del" onclick="delectacc()">Delete Account</h3>
                </div>
                <div class="set-descriptions">
                    <div class="set-des">
                        <h3>Version 1.0.4 &#40; PHP Version 8.2 &#41;</h3>
                    </div>
                    <div class="set-des">
                        <h3>CL/CMU/HDCSE/116/32- Static</h3>
                    </div>
                    <div class="set-des">
                        <h3><?php echo $_SESSION['admin-username'] ?></h3>
                    </div>
                    <div class="set-des">
                        <h3><?php echo $_SESSION['admin-usertype'] ?></h3>
                    </div>
                    <div class="set-des">
                        <h3 id="web-ver">Running On</h3>
                    </div>
                    <div class="set-des">
                        <h3 id="date">Last Loging </h3>
                    </div>
                </div>

            </div>
            <div class="system-info">
                <iframe id="monitor-embed" src="http://127.0.0.1:5100/" title="System Usage Monitor" width="500px"
                    height="450px"></iframe>

            </div>
            <div class="key-shorts-mac">
                <h1>Keyboard Shortcuts -&nbsp;<i class="fa-brands fa-apple"></i></h1>
                <div class="mac-shortcuts-1">
                    <ul>
                        <li>Dashboard: </li>
                        <li>Categories: </li>
                        <li>Menu: </li>
                        <li>Orders: </li>
                        <li>Promotions: </li>
                        <li>Events: </li>
                        <li>Reservations:</li>
                        <li>Settings: </li>

                    </ul>
                </div>
                <div class="mac-shortcuts-1-1">
                    <ul>
                        <li>Shift + D </li>
                        <li>Shift + C </li>
                        <li>Shift + M </li>
                        <li>Shift + O </li>
                        <li>Shift + P</li>
                        <li>Shift + E </li>
                        <li>Shift + R</li>
                        <li>Shift + S </li>

                    </ul>
                </div>
                <div class="shortcut-section2">
                    <div class="mac-shortcuts-1">
                        <ul>
                            <li>Add Items: </li>
                            <li>Add Promotions: </li>
                            <li>Add Events: </li>


                        </ul>
                    </div>
                    <div class="mac-shortcuts-1-2">
                        <ul>
                            <li>Command + i </li>
                            <li>Command + p </li>
                            <li>Command + e </li>


                        </ul>
                    </div>

                </div>

            </div>
            <div class="key-shorts-windows">
                <h1>Keyboard Shortcuts -&nbsp;<i class="fa-brands fa-windows"></i></h1>
                <div class="mac-shortcuts-1">
                    <ul>
                        <li>Dashboard: </li>
                        <li>Categories: </li>
                        <li>Menu: </li>
                        <li>Orders: </li>
                        <li>Promotions: </li>
                        <li>Events: </li>
                        <li>Reservations:</li>
                        <li>Settings: </li>

                    </ul>
                </div>
                <div class="mac-shortcuts-1-1">
                    <ul>
                        <li>Shift + D </li>
                        <li>Shift + C </li>
                        <li>Shift + M </li>
                        <li>Shift + O </li>
                        <li>Shift + P</li>
                        <li>Shift + E </li>
                        <li>Shift + R</li>
                        <li>Shift + S </li>

                    </ul>
                </div>
                <div class="shortcut-section2">
                    <div class="mac-shortcuts-1">
                        <ul>
                            <li>Add Items: </li>
                            <li>Add Promotions: </li>
                            <li>Add Events: </li>


                        </ul>
                    </div>
                    <div class="mac-shortcuts-1-2">
                        <ul>
                            <li>Control + i </li>
                            <li>Control + p </li>
                            <li>Control + e </li>


                        </ul>
                    </div>

                </div>
            </div>


    </section>