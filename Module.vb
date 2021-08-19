Imports System.Net
Module Module1
    Sub Main()
        Console.WriteLine(New WebClient().DownloadString("http://localhost/Project1/index.php"))
        Console.ReadLine()
    End Sub
End Module
