# pda6
pda6 team work


    <!-- Form 4: -->
    <div class="center">
        <p> Select/ Fill in the details to be in your favorite NBA team </p>

        <!-- You should replace the URL to PHP script in action with yours -->
        <form name="f1" action="http://css1.seattleu.edu/~sgurung/pda6/db5.php" method="post">
            <div>
                <p>
                Team: 
                <select name = "teams" id = "teams">
                    <option> -- no team selected -- </option>
                    <option value = '"bos"' > Boston Celtics </option>
                    <option value = '"bkn"' > Brooklyn Nets </option>
                    <option value = '"ny"' > New York Knicks </option>
                    <option value = '"phi"' > Philadelphia 76ers </option>
                    <option value = '"tor"' > Toronto Raptors </option>
                    <option value = '"gs"' > Golden State Warriors </option>
                    <option value = '"lac"' > Los Angeles Clippers </option>
                    <option value = '"lal"' > Los Angeles Lakers </option>
                    <option value = '"phx"' > Phoenix Suns </option>
                    <option value = '"sac"' > Sacramento Kings </option>
                    <option value = '"chi"' > Chicago Bulls </option>
                    <option value = '"cle"' > Cleveland Cavaliers </option>
                    <option value = '"det"' > Detroit Pistons </option>
                    <option value = '"ind"' > Indiana Pacers </option>
                    <option value = '"mil"' > Milwaukee Bucks </option>
                    <option value = '"dal"' > Dallas Mavericks </option>
                    <option value = '"hou"' > Houston Rockets </option>
                    <option value = '"mem"' > Memphis Grizzlies </option>
                    <option value = '"no"' > New Orleans Hornets </option>
                </p>
            </div>
            <br />
            <p> <input type="radio" name="CF" id="PPosition" value="CF" /> 
            
            <br /> 
            </p>
            <br />
            <input type="reset" value="Reset" />
            <input type="submit" value="Submit request" />
        </form>
    </div>

    <br />

    <br />




    <p> Type your favorite team code within " " (eg. "abc" or "ABC") to see their Team Code and Stadium </p>

        <p> ATL	Atlanta Hawks | BKN	Brooklyn Nets | BOS	Boston Celtics | CHA Charlotte Hornets |
            CHI	Chicago Bulls | CLE	Cleveland Cavaliers | DAL Dallas Mavericks | DEN Denver Nuggets |    
            DET	Detroit Pistons | GSW Golden State Warriors | HOU Houston Rockets | IND	Indiana Pacers |
            LAC	Los Angeles Clippers | LAL Los Angeles Lakers | MEM	Memphis Grizzlies | MIA	Miami Heat | 
            MIL	Milwaukee Bucks | MIL Milwaukee Bucks | MIN	Minnesota Timberwolves | NOP New Orleans Pelicans | 
            NYK	New York Knicks | OKC Oklahoma City Thunder | ORL Orlando Magic | PHI Philadelphia 76ers | 
            PHX	Phoenix Suns | SAC Sacramento Kings | SAS San Antonio Spurs | TOR Toronto Raptors | 
            UTA	Utah Jazz | WAS	Washington Wizards </p> 
    
        <!-- You should replace the URL to PHP script in action with yours -->
        <form name="f1" action="http://css1.seattleu.edu/~sgurung/pda6/db3.php" method="post">
            Team: <input type="text" name="val"> <br>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit request">
        </form>