<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Azure デプロイテスト</title>

    <script type="text/javascript" src="https://js.monitor.azure.com/scripts/b/ai.2.min.js"></script>

    <script type="text/javascript">
    try {
        var appInsights = new Microsoft.ApplicationInsights.ApplicationInsights({
            config: {
                
                connectionString: "InstrumentationKey=57ce6c24-1b1c-4a8a-84fb-9ad15aacfdab;IngestionEndpoint=https://japaneast-1.in.applicationinsights.azure.com/;LiveEndpoint=https://japaneast.livediagnostics.monitor.azure.com/;ApplicationId=4cf5a5d9-a006-446f-853f-69494fff3a3c"
                
            }
        });
        appInsights.loadAppInsights();
        appInsights.trackPageView();
        console.log("Azure Monitoring: Connected"); // 성공하면 콘솔에 이 글자가 뜹니다
    } catch (e) {
        console.error("Azure Monitoring Failed:", e);
    }
    </script>

    <style>
        body { 
            font-family: "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif; 
            text-align: center; 
            padding-top: 50px; 
        }
        h1 { color: #0078D4; }
    </style>
</head>
<body>
    <h1>Azure デプロイ成功！</h1>
    <p>このページが表示されている場合、Webサーバーは正常に稼働しています。</p>
    <p>現在のPHPバージョン: <?php echo phpversion(); ?></p>
</body>
</html>