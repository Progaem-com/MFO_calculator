<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Белый калькулятор займов https://progaem.com/ </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .page-title {
            text-align: center;
            margin: 20px 0 40px;
            color: #2c3e50;
            max-width: 800px;
        }
        
        .page-title h1 {
            font-size: 36px;
            margin-bottom: 15px;
            color: #27ae60;
        }
        
        .page-title p {
            font-size: 18px;
            color: #495057;
            line-height: 1.6;
        }
        
        .calculators-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            width: 100%;
            max-width: 1800px;
            margin-bottom: 40px;
        }
        
        .calculator-container {
            width: 100%;
            max-width: 800px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .calculator-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .header {
            background: #27ae60;
            color: white;
            padding: 25px 30px;
            text-align: center;
            position: relative;
        }
        
        .header h1 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 8px;
        }
        
        .header p {
            font-size: 16px;
            opacity: 0.9;
        }
        
        .calculator-body {
            display: flex;
            flex-wrap: wrap;
        }
        
        .calculator-inputs {
            flex: 1;
            min-width: 300px;
            padding: 30px;
            border-right: 1px solid #edf2f7;
        }
        
        .calculator-results {
            flex: 1;
            min-width: 300px;
            padding: 30px;
            background: #f8fcf9;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .input-section {
            margin-bottom: 30px;
            position: relative;
        }
        
        .input-title {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 18px;
        }
        
        .input-title i {
            margin-right: 10px;
            color: #27ae60;
            font-size: 20px;
        }
        
        .value-display {
            font-size: 32px;
            font-weight: 700;
            color: #27ae60;
            margin-bottom: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .slider-container {
            position: relative;
            height: 50px;
        }
        
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            border-radius: 4px;
            background: linear-gradient(90deg, #2ecc71 0%, #2ecc71 var(--slider-progress), #e2e8f0 var(--slider-progress), #e2e8f0 100%);
            outline: none;
        }
        
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: #fff;
            cursor: pointer;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
            border: 3px solid #27ae60;
            transition: all 0.2s ease;
        }
        
        .slider::-webkit-slider-thumb:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .slider-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            color: #718096;
            font-size: 14px;
            font-weight: 500;
        }
        
        .result-section {
            background: white;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #e2f0e9;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            margin-bottom: 30px;
        }
        
        .result-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #edf2f7;
        }
        
        .result-row:last-child {
            border-bottom: none;
        }
        
        .result-label {
            display: flex;
            align-items: center;
            color: #4a5568;
            font-size: 17px;
            font-weight: 500;
        }
        
        .result-label i {
            margin-right: 10px;
            color: #27ae60;
            font-size: 18px;
        }
        
        .result-value {
            font-weight: 700;
            font-size: 18px;
            color: #2d3748;
        }
        
        .btn-submit {
            background: #27ae60;
            color: white;
            border: none;
            width: 100%;
            padding: 18px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
            margin-top: 10px;
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.25);
        }
        
        .btn-submit:hover {
            background: #219653;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(39, 174, 96, 0.35);
        }
        
        .btn-submit:active {
            transform: translateY(0);
        }
        
        .info-note {
            padding: 15px;
            background: #f1f9f4;
            border-radius: 10px;
            border-left: 3px solid #27ae60;
            font-size: 14px;
            color: #4a5568;
            text-align: center;
        }
        
        .info-note strong {
            color: #27ae60;
        }
        
        .calculator-divider {
            width: 100%;
            text-align: center;
            margin: 20px 0;
            color: #27ae60;
            font-size: 24px;
            font-weight: bold;
        }
        
        .offer-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #e74c3c;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 3px 8px rgba(231, 76, 60, 0.3);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Адаптивность для мобильных */
        @media (max-width: 768px) {
            .calculator-body {
                flex-direction: column;
            }
            
            .calculator-inputs {
                border-right: none;
                border-bottom: 1px solid #edf2f7;
            }
            
            .calculator-results {
                padding: 25px;
            }
            
            .header {
                padding: 20px;
            }
            
            .header h1 {
                font-size: 22px;
            }
            
            .value-display {
                font-size: 28px;
            }
            
            .calculators-container {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }
            
            .page-title h1 {
                font-size: 28px;
            }
            
            .page-title p {
                font-size: 16px;
            }
        }
        
        @media (max-width: 480px) {
            .value-display {
                font-size: 24px;
            }
            
            .calculator-inputs, 
            .calculator-results {
                padding: 20px;
            }
            
            .result-label {
                font-size: 15px;
            }
            
            .result-value {
                font-size: 16px;
            }
            
            .btn-submit {
                padding: 16px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
                <div class="button-container">
            <a href="https://progaem.com/usluga-sozdanie-kalkulyatora-zajmov-dlya-mfo.html" class="btn btn-primary"  target=_blank>
                <i class="fas fa-calculator"></i>
                Заказать калькулятор МФО
            </a>
            <br>
            <a href="https://progaem.com/kontakty" class="btn btn-secondary"  target=_blank>
                <i class="fas fa-address-book"></i>
                Контакты
            </a>
        </div>

    <div class="page-title">
        <h1><i class="fas fa-calculator"></i> Белый калькулятор займов</h1>
        <p>Два независимых калькулятора для расчета условий займа. Оба начинаются с суммы 7 000 рублей на срок 7 дней. Беспроцентный период до 15 000 рублей на 15 дней.</p>
    </div>
    



    <div class="calculators-container">
        <!-- Первый калькулятор -->
        <div class="calculator-container">
            <div class="header">
                <h1><i class="fas fa-calculator"></i> Калькулятор займов #1</h1>
                <p>Быстрый расчет условий займа</p>
                <div class="offer-badge">Без процентов!</div>
            </div>
            
            <div class="calculator-body">
                <div class="calculator-inputs">
                    <div class="input-section">
                        <div class="input-title">
                            <i class="fas fa-ruble-sign"></i> Выберите сумму
                        </div>
                        <div class="value-display" id="amount-value1">7 000 руб.</div>
                        <div class="slider-container">
                            <input 
                                type="range" 
                                min="1000" 
                                max="50000" 
                                step="1000" 
                                value="7000" 
                                class="slider" 
                                id="amount-slider1"
                                style="--slider-progress: 12%"
                            >
                            <div class="slider-labels">
                                <span>1 000 руб.</span>
                                <span>50 000 руб.</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-section">
                        <div class="input-title">
                            <i class="far fa-calendar-alt"></i> Выберите срок
                        </div>
                        <div class="value-display" id="term-value1">7 дней</div>
                        <div class="slider-container">
                            <input 
                                type="range" 
                                min="1" 
                                max="30" 
                                step="1" 
                                value="7" 
                                class="slider" 
                                id="term-slider1"
                                style="--slider-progress: 20%"
                            >
                            <div class="slider-labels">
                                <span>1 день</span>
                                <span>30 дней</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn-submit" id="submit-btn1">
                        <i class="fas fa-hand-holding-usd"></i> ПОЛУЧИТЬ ДЕНЬГИ
                    </button>
                </div>
                
                <div class="calculator-results">
                    <div class="result-section">
                        <div class="result-row">
                            <div class="result-label">
                                <i class="fas fa-wallet"></i> Итого к оплате
                            </div>
                            <div class="result-value" id="total-amount1">7 000 руб.</div>
                        </div>
                        <div class="result-row">
                            <div class="result-label">
                                <i class="far fa-clock"></i> Оплатить до
                            </div>
                            <div class="result-value" id="repayment-date1">10.06.2025</div>
                        </div>
                    </div>
                    
                    <div class="info-note">
                        <strong>Выгодное предложение:</strong> Займы до 15 000 рублей на срок до 15 дней - <strong>без процентов!</strong>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="calculator-divider">
            <i class="fas fa-arrows-alt-h"></i>
        </div>
        
        <!-- Второй калькулятор -->
        <div class="calculator-container">
            <div class="header">
                <h1><i class="fas fa-calculator"></i> Калькулятор займов #2</h1>
                <p>Быстрый расчет условий займа</p>
                <div class="offer-badge">Без процентов!</div>
            </div>
            
            <div class="calculator-body">
                <div class="calculator-inputs">
                    <div class="input-section">
                        <div class="input-title">
                            <i class="fas fa-ruble-sign"></i> Выберите сумму
                        </div>
                        <div class="value-display" id="amount-value2">7 000 руб.</div>
                        <div class="slider-container">
                            <input 
                                type="range" 
                                min="1000" 
                                max="50000" 
                                step="1000" 
                                value="7000" 
                                class="slider" 
                                id="amount-slider2"
                                style="--slider-progress: 12%"
                            >
                            <div class="slider-labels">
                                <span>1 000 руб.</span>
                                <span>50 000 руб.</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-section">
                        <div class="input-title">
                            <i class="far fa-calendar-alt"></i> Выберите срок
                        </div>
                        <div class="value-display" id="term-value2">7 дней</div>
                        <div class="slider-container">
                            <input 
                                type="range" 
                                min="1" 
                                max="30" 
                                step="1" 
                                value="7" 
                                class="slider" 
                                id="term-slider2"
                                style="--slider-progress: 20%"
                            >
                            <div class="slider-labels">
                                <span>1 день</span>
                                <span>30 дней</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn-submit" id="submit-btn2">
                        <i class="fas fa-hand-holding-usd"></i> ПОЛУЧИТЬ ДЕНЬГИ
                    </button>
                </div>
                
                <div class="calculator-results">
                    <div class="result-section">
                        <div class="result-row">
                            <div class="result-label">
                                <i class="fas fa-wallet"></i> Итого к оплате
                            </div>
                            <div class="result-value" id="total-amount2">7 000 руб.</div>
                        </div>
                        <div class="result-row">
                            <div class="result-label">
                                <i class="far fa-clock"></i> Оплатить до
                            </div>
                            <div class="result-value" id="repayment-date2">10.06.2025</div>
                        </div>
                    </div>
                    
                    <div class="info-note">
                        <strong>Выгодное предложение:</strong> Займы до 15 000 рублей на срок до 15 дней - <strong>без процентов!</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Общие функции для обоих калькуляторов
        
        // Форматирование чисел с разделителями
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }
        
        // Расчет даты погашения
        function calculateRepaymentDate(days) {
            const today = new Date();
            const repayment = new Date(today);
            repayment.setDate(today.getDate() + days);
            
            const day = repayment.getDate().toString().padStart(2, '0');
            const month = (repayment.getMonth() + 1).toString().padStart(2, '0');
            const year = repayment.getFullYear();
            
            return `${day}.${month}.${year}`;
        }
        
        // Расчет суммы к оплате с учетом условий
        function calculateTotalAmount(amount, term) {
            // Условие: до 15 000 руб. на срок до 15 дней - без процентов
            if (amount <= 15000 && term <= 15) {
                return amount;
            }
            
            // Во всех остальных случаях применяем ставку 0.8% в день
            const interest = amount * 0.008 * term;
            return Math.round(amount + interest);
        }
        
        // Инициализация калькулятора
        function initCalculator(calculatorId) {
            const amountSlider = document.getElementById(`amount-slider${calculatorId}`);
            const termSlider = document.getElementById(`term-slider${calculatorId}`);
            const amountValue = document.getElementById(`amount-value${calculatorId}`);
            const termValue = document.getElementById(`term-value${calculatorId}`);
            const totalAmount = document.getElementById(`total-amount${calculatorId}`);
            const repaymentDate = document.getElementById(`repayment-date${calculatorId}`);
            const submitButton = document.getElementById(`submit-btn${calculatorId}`);
            
            // Обновление значений
            function updateValues() {
                const amount = parseInt(amountSlider.value);
                const term = parseInt(termSlider.value);
                
                // Обновляем отображаемые значения
                amountValue.textContent = `${formatNumber(amount)} руб.`;
                termValue.textContent = `${term} ${term === 1 ? 'день' : term < 5 ? 'дня' : 'дней'}`;
                
                // Рассчитываем сумму к оплате
                const total = calculateTotalAmount(amount, term);
                totalAmount.textContent = `${formatNumber(total)} руб.`;
                
                // Обновляем дату погашения
                repaymentDate.textContent = calculateRepaymentDate(term);
                
                // Обновляем прогресс ползунков
                const amountProgress = (amount / 50000) * 100;
                const termProgress = (term / 30) * 100;
                amountSlider.style.setProperty('--slider-progress', `${amountProgress}%`);
                termSlider.style.setProperty('--slider-progress', `${termProgress}%`);
            }
            
            // Инициализация значений
            updateValues();
            
            // Обработчики событий
            amountSlider.addEventListener('input', updateValues);
            termSlider.addEventListener('input', updateValues);
            
            // Обработка кнопки
            submitButton.addEventListener('click', function() {
                const amount = parseInt(amountSlider.value);
                const term = parseInt(termSlider.value);
                const total = calculateTotalAmount(amount, term);
                
                // Анимация кнопки
                this.classList.add('clicked');
                setTimeout(() => {
                    this.classList.remove('clicked');
                }, 300);
                
                // Показать сообщение
                alert(`Заявка на займ #${calculatorId}:\nСумма: ${formatNumber(amount)} руб.\nСрок: ${term} дней\nК возврату: ${formatNumber(total)} руб.`);
            });
        }
        
        // Инициализация обоих калькуляторов при загрузке страницы
        document.addEventListener('DOMContentLoaded', function() {
            initCalculator(1);
            initCalculator(2);
        });
    </script>
</body>
</html>
