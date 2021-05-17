<html>

    <head>
        
    </head> 
    <body>
        <table>
            <thead>
                <tr>
                    <td>Company_id</td>
                    <td>Company_namne</td>
                    <td>Company_web</td>
                    <td>Company_address</td>                   
                </tr>
            </thead>
            <tbody>
            <?php foreach($companies as $company):?>
                <tr>
                    <td>
                        <?php echo $company->company_id ?>
                    </td>
                    <td>
                        <?php echo $company->company_name ?>
                    </td>
                    <td>
                        <?php echo $company->company_web ?>
                    </td>
                    <td>
                        <?php echo $company->company_address ?>
                    </td>                  
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <div>
               <?php echo $companies->links() ?>
        </div>
    </body>
</html>